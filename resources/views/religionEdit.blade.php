@extends('layout')
@section('content')
<form action="{{route('religionCN.update',$religionVar->religionId)}}" method="Post">
	@method('PATCH')
	@csrf
	
	<div class="form-group">
		<label><h2>Religion Name</h2></label>
		<input type="text" name="religionDesc" class="form-control" value="{{$religionVar->religionDesc}}">
		
	</div>

	<div class="form-group">
		<label><h2>Active</h2></label>
		<input type="checkbox" name="active" class="form-control" value="{{$religionVar->active}}">
	</div>

	<div class="form-group">
		<label><h2>Remark</h2></label>
		<textarea name="remark" value="{{$religionVar->remark}}" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</form>
@endsection