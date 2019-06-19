@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Insert Image</title>
</head>
<body>
<div class="container">

	<div class="jumbotron">
		<h1>Image CRUD: PHP Laravel</h1>
	<form action="{{route('addImage')}}" method="Post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name..">
		</div>

		<div class="form-group">
			<label>Email</label>
			<input type="email" name="email" class="form-control" placeholder="Enter Email..">
		</div>

		<div class="form-group">
			<label>Post</label>
			<input type="text" name="post" class="form-control" placeholder="Enter Post..">
		</div>

		<div class="input-group">
			<div class="custom-file">
				<input type="file" name="image" class="custom-file-input">
				<label class="custom-file-label">Choose File</label>
				
			</div>

		</div>
		<br>
		<button type="submit" class="btn btn-primary">Save Data</button>
		
	</form>
	
</div>
</div>
</body>
</html>
@endsection