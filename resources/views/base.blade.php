<!DOCTYPE html>
<html>
	<head>
		<title>SImple Laravel CRUD</title>
		<link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.min.css')}}">
	</head>
	<body>
		<div class="bg-info text-white p-5 mb-3">
			<a href="{{route('posts.index')}}" class="btn btn-secondary" title="Home">Home</a>
			<a href="{{route('posts.create')}}" class="btn btn-secondary" title="Home">Create Post</a>
		</div>
		<div class="container">
			@yield('content')
		</div>
			
	</body>

	<footer>
		<div class="bg-dark text-white text-center p-4">
			All Rights reserved {{date('Y')}}
		</div>
	</footer>
</html>