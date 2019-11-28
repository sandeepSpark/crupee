@extends('base')
@section('content')
<h2 class="my-3">Create A Post</h2>
@if ($errors->all())
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</div>
@endif
	<form action="{{ route('posts.store') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" name="title" id="post_title" class="form-control">
		</div>
		<div class="form-group">
			<label for="Content">Content</label>
			<textarea name="content" id="post_content" cols="30" rows="10" class="form-control"></textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-outline-info">Add a Post</button>
		</div>
	</form>
@stop