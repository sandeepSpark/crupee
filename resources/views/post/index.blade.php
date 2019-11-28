@extends('base')
@section('content')
@if (session()->has('message'))
	<div class="alert alert-success">
		{{ session()->get('message') }}
	</div>

@endif
	<div class="row mt-5">
		@foreach ($posts as $key=> $post)
			<div class="card mt-4">
				<div class="card-body">
					<h2>
						<a href="{{ route('posts.show',$post->id) }} " title="{{ $post->title }}">{{ $post->title }}</a>
					</h2>
					
					<a href="{{ route('posts.edit',$post->id) }}" title="" class="btn btn-outline-primary">Edit</a>
				<form onsubmit="return confirm('Are You Sure you want to delete this post?')" action="{{ route('posts.destroy',$post->id) }}" method="post" class="d-inline-block">
					@csrf
					@method('delete')
					<button type="submit" class="btn btn-outline-danger">Delete</button>
				</form>
				</div>
			</div>
			<div class="clearfix">
				
			</div>
		@endforeach
		<div class="mt-4">
			{{ $posts->links() }}
		</div>
	</div>
@stop