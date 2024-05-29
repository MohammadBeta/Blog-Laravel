@extends('layouts.app')
@section('title', 'Create New Post')



@section('content')
<form method="post" action='{{route('posts.store')}}'>
 @csrf
<div class="mb-3">
  <label class="form-label">Post Title</label>
  <input name='title' type="text" class="form-control">

</div>
<div class="mb-3">
  <label class="form-label">Post Description</label>
  <textarea name='description' class="form-control"  rows="3"></textarea>
</div>
<label class="form-label">Created By</label>

<select  name='posted_by' class="form-select" >
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<button class="btn btn-primary" type="submit">Create</button>
</form>
@endsection