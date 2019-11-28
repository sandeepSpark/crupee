@extends('base')
@section('content')
<h2 class="my-3">Edit the Post</h2>
@if ($errors->all())
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</div>
@endif

	<form action="{{ route('posts.update',$post->id) }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		@csrf
		@method('put')
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="post_title" class="form-control" value="{{ $post->title }}" >
		</div>
		<div class="form-group">
			<label for="Content">Content</label>
			<textarea name="content" id="post_content" cols="30" rows="10" class="form-control"  >{{ $post->content }}</textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-outline-info">Update the Post</button>
		</div>
	</form>
@stop