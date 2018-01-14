<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class createPostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        //@Todo: add validation !

        $post = new Post($request->all());

        auth()->user()->posts()->save($post);

        return $post->title;
    }
}
