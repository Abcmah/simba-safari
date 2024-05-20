<?php
namespace App\Http\Controllers;
use App\Models\Post;

use Inertia\Inertia;
use Inertia\Controller;
use Illuminate\Http\Request;
use App\Mail\SendEmailComponent;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Mail;
class IndexController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view('contact');
    }
    public function sendResToClient($email,$name){
        $maildata = [
            'title' => 'We have recieved your message',
            'homepage' => '',
            'subject'=>'We have recieved your message',
            'message'=>"Thank you for contacting us! We have recienced your message and will get back to you as soon as possible. You can expect a responce within 24 hours. if we need any additional information from you, we will be sure to reach out.",
            'name' =>$name,
            'toClient'=>true
        ];
        try{
            Mail::to($email)->send(new SendEmailComponent($maildata));
            return 'sent';
        }catch(Exception $e){
            return $e;
        }
    }
    public function sendConctToMana($email,$name, $message){
        $maildata = [
            'title' => 'Message from ' . $name,
            'email' => $email,
            'subject'=>'Client message from Website',
            'message'=>$message,
            'toClient'=>false
        ];
        try{
            Mail::to($_ENV['MAIL_USERNAME'])->send(new SendEmailComponent($maildata));
            return 'sent';
        }catch(Exception $e){
            return $e;
        }
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function projects(){
        return view('projects');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'phone'=>'',
            'message'=>'required'
        ]
        );
        $this->sendConctToMana($request->email, $request->name, $request->message);
        if($this->sendResToClient($request->email, $request->name) == 'sent'){
            session()->flash('message', 'Your message is sent, Thank you for contacting us.');
            $res =['message'=>'sent'];
            return json_encode($res);
        }else{
            session()->flash('message', 'Error');
            $res =['message'=>'not sent'];
            return json_encode($res);
        }
    }
}
