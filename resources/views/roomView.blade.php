@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Member Info Bank</title>
	<style>
		button{border-radius: 25px;}
	</style>
</head>
<body style="background-color:LightGray;">
	<form action="{{route('roomCN.store')}}" method="Post" style="padding-top: 50px;color: black;">
	<div class="jumbotron jumbotron-fluid text-center">
	<h1>Member Info Bank</h1>

	<!-- <div class="bg-light"> -->
	@csrf
		<div class="container">
		<div class="form-group row">
			<label for="roomDesc" class="col-sm-2 col-form-label">Room Description:</label>
			<div class="col-sm-5">
			<input type="text" name="roomDesc" class="form-control" placeholder="Enter room name">
		</div>
		</div>
		<div class="form-group row">
			<label for="active" class="col-sm-2 col-form-label">Active</label>
			<div class="col-sm-5">
			<input type="checkbox" name="active" class="form-check-input" value="1"> 
		</div>
		</div>
		<div class="form-group row">
			<label for="remark" class="col-sm-2 col-form-label">Remark</label>
			<div class="col-sm-5">
			<textarea name="remark" class="form-control"></textarea>
		</div>
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-danger">Reset</button>
		</div><br><br>
	</div>
	</form>
</body>
</html>
@endsection