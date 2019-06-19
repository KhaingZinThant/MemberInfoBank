@extends('layout')
@section('content')
<form action="{{route('buildingCN.update',$buildingVar->buildingId)}}" method="Post">
	<div class="bg-light mt-5 mb-5">
		@method('PATCH')
		@csrf
		<div class="form-group">
			<label>Building</label>
			<input type="text" name="buildingDesc" value="{{$buildingVar->buildingDesc}}" class="form-control">
		</div>
		<div class="form-group">
			<label>Active</label>
			<input type="checkbox" name="active" value="{{$buildingVar->active}}" class="form-check-control" checked="">
		</div>
		<div class="form-group">
			<label>Remark</label>
			<textarea name="remark" value="{{$buildingVar->buildingDesc}}" class="form-control"></textarea>
		</div>
		<div class="form-group">
		<button name="submit" class="btn btn-info" type="submit">Submit</button>
		</div>
</form>
@endsection
