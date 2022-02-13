<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "active" => 'posts',
            // "posts" => Post::all()
            // untuk eager load
            "posts" => Post::latest()->filter(request(['search']))->get()
        ]);
    }
    public function show(Post $post)
    {
        
	return view('post', [
		"title" => "Single Post",
        "active" => 'posts',
		"post" => $post
	]);
    }
}
