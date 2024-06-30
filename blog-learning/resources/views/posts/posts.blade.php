@extends('layouts.app')
@section('title', 'Posts')
@section('content')
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Posted By</th>
            <th scope="col">Title</th>
            <th scope="col">Created At</th>
            <th scope="col">Post Manage</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($posts as $post)
          <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->user == null ? 'Unknown': $post->user->name}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at}}</td>
            <td>
                <a href='{{route('posts.show', $post->id)}}' class="btn btn-info">View Post</a>
                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">Edit Post</a>
                <form method="post" action="{{route('posts.destroy', $post->id)}}">
                  @csrf
                  @method('delete')
                <button type='submit' class="btn btn-danger">Delete Post</a>
              </form>

            </td>
          </tr>
         @endforeach
          
        </tbody>
      </table>
      <div class="text-center">
      <div class="mt-4">
        <a href='{{route('posts.create')}}' class="btn btn-success">Create New Post</a>
      </div>
      </div>
      @endsection