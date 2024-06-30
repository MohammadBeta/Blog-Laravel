@extends('layouts.app')
@section('title', 'Edit Post')



@section('content')
<form method="post" action='{{route('posts.update', $post->id)}}'>
 @csrf
@method('put')
<div class="mb-3">
  <label class="form-label">Post Title</label>
  <input name='title' type="text" class="form-control" value="{{$post->title}}">

</div>
<div class="mb-3">
  <label class="form-label">Post Description</label>
  <textarea name='description' class="form-control"  rows="3">{{$post->description}}</textarea>
</div>
<label class="form-label">Created By</label>

<select  name='posted_by' class="form-select" >
  @foreach ($users as $user)
  <option value='{{$user->id}}' @selected($post->user_id == $user->id)>{{$user->name}}</option>
@endforeach
</select>
<button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection