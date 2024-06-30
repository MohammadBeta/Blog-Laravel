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

    public function destroy($postID)
    {
        Post::destroy($postID);
        return to_route('posts.index');
    }
    public function edit($postID)
    {
        $post = Post::find($postID);
        $users = User::all();
        return view('posts.edit', ['post' => $post, 'users' => $users]);
    }
    public function update($postID)
    {
        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $postedby = $data['posted_by'];
        DB::table('posts')
            ->where('id', $postID)->update(['title' => $title, 'description' => $description, 'user_id' => $postedby]);
        return to_route('posts.show', $postID);
    }
}
