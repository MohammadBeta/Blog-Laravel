@extends('layouts.app')

@section('title', 'Show Post')

@section('content')
      <div class="card">
        <div class="card-header">
         Ali
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->description}}</p>
          <a  class="btn btn-primary">Edit Post</a>
          <a  class="btn btn-danger">Delete Post</a>
        </div>
      </div>
@endsection