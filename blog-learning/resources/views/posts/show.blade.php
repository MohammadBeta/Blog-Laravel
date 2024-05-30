@extends('layouts.app')

@section('title', 'Show Post')

@section('content')
      <div class="card">
        <div class="card-header">
         {{$post->user->name}}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
          <p class="card-text">{{$post->user->email}}</p>
          <a  class="btn btn-primary">Edit Post</a>
          <form method="post" action="{{route('posts.destroy', $post->id)}}">
            @csrf
            @method('delete')
          <button type='submit' class="btn btn-danger">Delete Post</a>
        </form>
        </div>
      </div>
@endsection