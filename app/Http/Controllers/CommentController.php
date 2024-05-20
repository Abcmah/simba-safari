<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validated = $request->validate([
            'post_id'=>'required',
            'name'=>'required',
            'email'=>'required',
            'body'=>'required',
        ]);
        Comment::create($validated);
        return redirect('/blog/'.$validated['post_id']); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment):RedirectResponse
    {
        //
        // dd($comment);
        $comment->delete();
        return \redirect(route('post.comment.manage'));
    }
    public function manageComment(){
        return Inertia::render('Post/ManageComment',[
            'comments'=>Comment::latest()->paginate(15)
        ]);
    }
}
