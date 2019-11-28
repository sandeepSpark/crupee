@extends('base')
@section('content')
	<div class="card ">
		<div class="card-header">
			<h2>
				{{ $post->title }}
			</h2>
		</div>
		<div class="card-body">
			
			<h4>{{ $post->content }}</h4>
		</div>

		
	</div>
@stop