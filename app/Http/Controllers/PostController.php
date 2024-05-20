<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\News;
use App\Models\Post;
use Inertia\Inertia;
use App\Models\Subscriber;
use App\Mail\NewSubscriber;
use Illuminate\Http\Request;
use App\Events\BlogPostCreated;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Intervention\Image\Image as Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts = Post::latest()->with('user:id,name')->paginate(2);
        $posts = Post::latest()->filter(request(['tag','search']))->with('user:id,name')->Paginate(10);
        // $posts = Post::latest();
        // dd($posts);
        return view('blog.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Post/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        $validated = $request->validate([
            'title' => 'required',
            'blog' => 'required',
            'tags' => 'required',
            'image' => ''
        ]);
        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('uploads','public');
        }
        // Post::create([ph
        //     'title' => $request->title,
        //     'story' => $request->blog,
        //     'tags' => $request->tags,
        // ]);
        // $request->user()->posts()->create([
        //     'title' => $request->title,
        //     'story' => $request->blog,
        //     'tags' => $request->tags,
        // ]);
        // $image = Image::make(\public_path("storage/{$image}"))->fit(1000, 667);
        // $image->save();
        $request->user()->posts()->create([
                'title' => $request->title,
                'blog' => $request->blog,
                'tags' => $request->tags,
                'image' => $validated['image'],
            ]);
        $request->session()->flash('status', 'Post created!');
            // BlogPostCreated::dispatch();
        return Redirect::route('post.manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
        $comments = $post->comments()->latest()->get();
        $commentsReplies = $post->commentReplies()->get();
        $title = $post->title;
        // $commentsReplies = $comments

        return view('blog.show',['post'=>$post,'user'=>$post->user->only('name'),'comments'=>$comments,'replies'=>$commentsReplies, 'title'=>$title]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
      
        return Inertia::render('Post/Update',['post'=>$post,'edit'=>true]);
    }
    public function createNews(Request $request){
        return Inertia::render('Post/CreateNews');
    }
    public function sendNews(Request $request){
        $validated = $request->validate([
            'headline'=>'required',
            'story'=>'required'
        ]);
        $request->session()->flash('status', 'Your News is sent!');
        $request->user()->news()->create($validated);
        return \redirect('news/manage');
    }
    public function managePost(Request $request){
        $posts = Post::latest()->filter(request(['tag','search']))->with('user:id,name')->paginate(15);
        return Inertia::render('Post/ManagePost',['posts'=>$posts,'flash' => [
            'message' => fn () => $request->session()->get('status')
        ]]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        //
        // dd($request);
        $validated = $request->validate([
            'title' => 'required',
            'blog' => 'required',
            'tags' => 'required',
            'image' => ''
        ]);
        if($request->hasFile('image')){
            $validated['image'] = $request->file('image')->store('uploads','public');
        }
        // $image = Image::make(\public_path("storage/{$image}"))->fit(1000, 667);
        // $image->save();
        $post->update([
            'title' => $request->title,
            'blog' => $request->blog,
            'tags' => $request->tags,
            'image' => $validated['image'],
        ]);
        $request->session()->flash('status', 'Post Updated!');
        return Redirect::route('post.manage');
        
    }
    public function notify_management($email){
        $maildata = [
            'title' => 'Subscription notification',
            'email' => $email,
            'subject'=>'New subscriber',
            'message'=>'new subscriber to maritim ideas',
            'toClient'=>false
        ];
        Mail::to($_ENV['MAIL_USERNAME'])->send(new NewSubscriber($maildata));
    }
    public function notify_subscriber($email){
        $maildata = [
            'title' => 'We have recieved your subscription',
            'homepage' => '',
            'subject'=>'Subscription confirmation',
            'message'=>"Thank you for subscription us!",
            'toClient'=>true
        ];
        Mail::to($email)->send(new NewSubscriber($maildata));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        //
        // dd($post);
        $post->delete();
        // $request->session()->flash('status', 'Task was successful!');
        return \redirect(route('post.manage'));

    }
    public function subscribe(Request $request)
    {
        //
    
        $su = new Subscriber;
        $re = $su->where('email',$request->email)->get();
        // dd(count($re));
        if(count($re)>0){
            $res = ['message'=>'This email is already subscribed'];
            return json_encode($res);
        }else{
            $validated = $request->validate([
                'email'=>['required',Rule::unique('subscribers','email')]
            ]);
            Subscriber::create(
            ['email'=>$request->email,
            'subscription_token'=>rand(1000000,9999999)
            ]
            );
          
            $this->notify_management($request->email);
            $this->notify_subscriber($request->email);
            return json_encode(['message'=>'Subscribed']);
        }
        
    }
    public function newsManage(Request $request){
        return Inertia::render('Post/ManageNews',[
            'news'=>News::with('user:id,name')->latest()->paginate(15),
            'flash' => [
                'message' => fn () => $request->session()->get('status')
            ],
        ]);
        
    }
    public function unsubscribe(Request $request){
        dd($request);
    }
    public function manageSubscribe(Request $request){

        return Inertia::render('Post/ManageSubscriber',['subscribers'=>Subscriber::latest()->paginate(15),'flash' => [
            'message' => fn () => $request->session()->get('status')]]);
    }
    public function destroyNews(News $news){
        $news->delete();
        return \redirect(route('news.manage'));
    }

}
