<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('auth', [
            'except'=>['index', 'show']
        ]);
    }

    function index()
    {
        $posts = Post::get();
    
        return view('posts.index', ['post' => $posts]);
    }

    function show(Post $post) {
        return view('posts.show', ['post'=>$post]);
    }

    function create(){
        return view('posts.create', ['post'=>new Post()]);
    }

    function store(SavePostRequest $request) {

        Post::create($request->validated());

        return redirect()->route('posts.index')->with('status', 'Post created');
    }

    function edit(Post $post){
        return view('posts.edit', ['post'=>$post]);

    }

    function update(SavePostRequest $request, Post $post) {
        
        $post->update($request->validated());

        return redirect()->route('posts.index')->with('status', 'Post updated');
    }

    function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('status', 'Post deleted');
    }
}
