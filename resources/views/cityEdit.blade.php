@extends('layout')
@section('content')
<form action="{{route('cityCN.update',$cityVar->cityId)}}" method="Post">
	<div class="bg-light mt-5 mb-5">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label>City Description</label>
			<input type="text" name="cityDesc" value="{{$cityVar->cityDesc}}" class="form-control">
		</div>
		<div class="form-group">
			<label>Active</label>
			<input type="checkbox" name="active" value="{{$cityVar->active}}" class="form-check-control" checked="">
		</div>
		<div class="form-group">
			<label>Remark</label>
			<textarea name="remark" value="{{$cityVar->cityDesc}}" class="form-control"></textarea>
		</div>
		<div class="form-group">
		<button name="submit" class="btn btn-info" type="submit">Submit</button>
		</div>
</form>
@endsection
