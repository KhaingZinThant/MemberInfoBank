@extends('layout')
@section('content')
<form action="{{route('roomStatusCN.update',$roomStatusVar->roomStatusId)}}" method="Post">
	@method('PATCH')
	@csrf
	
	<div class="form-group">
		<label><h2>Room Status</h2></label>
		<input type="text" name="roomStatusDesc" class="form-control" value="{{$roomStatusVar->roomStatusDesc}}">
		
	</div>

	<div class="form-group">
		<label><h2>Active</h2></label>
		<input type="checkbox" name="active" class="form-control" value="{{$roomStatusVar->active}}">
	</div>

	<div class="form-group">
		<label><h2>Remark</h2></label>
		<textarea name="remark" value="{{$roomStatusVar->remark}}" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</form>
@endsection