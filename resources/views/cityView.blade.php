@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Member Info Bank</title>
</head>
<body>
	<form action="{{route('cityCN.store')}}" method="Post" style="padding-top: 50px;color: black">
	<div class="jumbotron jumbotron-fluid text-center">
	<h1>Member Info Bank</h1>
	</div>
	<div class="bg-light">
	@csrf
		<div class="container">
		<h2>City</h2>
		<div class="form-group row">
			<label for="cityDesc" class="col-sm-2 col-form-label">City Description:</label>
			<div class="col-sm-5">
			<input type="text" name="cityDesc" class="form-control" placeholder="Enter city name">
		</div>
		</div>
		<div class="form-group row">
			<label for="active" class="col-sm-2 col-form-label"> Active</label>
			<div class="col-sm-5">
			<input type="checkbox" name="active" class="form-check-input" value="1"> 
		</div>
		</div>
		<div class="form-group row">
			<label for="remark" class="col-sm-2 col-form-label">Remark:</label>
			<div class="col-sm-5">
			<textarea name="remark" class="form-control"></textarea>
		</div>
		</div>
		<div class="form-group">
		<input type="submit" value="Submit" class="btn btn-primary">
		<input type="reset" value="Clear" class="btn btn-danger">
		</div>
	</form>
</body>
</html>
@endsection
