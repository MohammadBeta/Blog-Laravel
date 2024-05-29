<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.posts", ['posts' => $posts]);
    }
    public function show($post)
    {
        $post = Post::find(1);
        return view("posts.show", ['post' => $post]);
    }
    public function create()
    {
        return view("posts.create");
    }
}
