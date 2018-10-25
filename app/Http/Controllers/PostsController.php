<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->get('title');
        $post->author = $request->get('author');
        $post->date = $request->get('date');
        $post->body = $request->get('body');
        $post->save();
        return redirect()->route('posts.index');
    }
}
