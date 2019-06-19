@extends('layout')
@section('content')
<form action="{{route('avoidFoodCN.update',$avoidFoodVar->avoidFoodId)}}" method="Post">
	<div class="bg-light mt-5 mb-5">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label>Avoid Foods</label>
			<input type="text" name="avoidFoodDesc" value="{{$avoidFoodVar->avoidFoodDesc}}" class="form-control">
		</div>
		<div class="form-group">
			<label>Active</label>
			<input type="checkbox" name="active" value="{{$avoidFoodVar->active}}" class="form-check-control" checked="">
		</div>
		<div class="form-group">
			<label>Remark</label>
			<textarea name="remark" value="{{$avoidFoodVar->buildingDesc}}" class="form-control"></textarea>
		</div>
		<div class="form-group">
		<button name="submit" class="btn btn-info" type="submit">Submit</button>
		</div>
</form>
@endsection
