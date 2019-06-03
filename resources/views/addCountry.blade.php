@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register</title>
	<style>
		button{border-radius: 25px;}
	</style>
</head>
<body style="background-color:LightGray;">
	<form action="{{route('countryCN.store')}}" method="Post" style="padding-top: 50px;color: black;">
	@csrf
	<div class="jumbotron jumbotron-fluid text-center">
	<h1>Country</h1>
		<div class="container">
			<label for="name">Country:</label>
			<input type="text" name="name" class="form-control" placeholder="Enter country name">
		</div><br>
		<div class="form-group">
		<button type="submit" class="btn btn-primary">OK</button>
		<button type="reset" class="btn btn-danger">Cancel</button>
		</div><br>
	</div>
	</form>
</body>
</html>
@endsection