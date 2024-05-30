<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view("posts.posts", ['posts' => $posts]);
    }
    public function show($post)
    {
        $post = Post::find($post);
        return view("posts.show", ['post' => $post]);
    }
    public function create()
    {
        $users = User::all();
        return view("posts.create", ['users' => $users]);
    }
    public function store()
    {
        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $postedby = $data['posted_by'];
       Post::create(['title' => $title, 'description' => $description, 'user_id' => $postedby]);
        return to_route('posts.index');
    }
}
