@extends('layout')
@section('content')
<form action="{{route('roomCN.update',$Room->roomId)}}" method="Post">
	@method('PATCH')
	@csrf
	<div class="bg-light mt-5 mb-5">
	<div class="form-group">
		<table>
			<tr>
			<td><label>Room Description</label></td>
			<td><input type="text" name="roomDesc" value="{{$roomVar->roomDesc}}" class="form-control"></td>
		</tr>
		</div>
		<div class="form-group">
			<tr>
			<td><label>Active</label></td>
			<td><input type="checkbox" name="active" value="{{$roomVar->active}}" class="form-check-control" value="{{$roomVar->active}}" checked=""></td>
		</tr>
		</div>
		<div class="form-group">
			<tr>
			<td><label>Remark</label></td>
			<td><textarea name="remark" value="{{$roomVar->remark}}" class="form-control"></textarea></td>
		</tr>
		</div>
		<div class="form-group">
			<tr>
		<td><button name="submit" class="btn btn-info" type="submit">Submit</button></td>
	</tr>
		</div>
	</form>
</body>
</html>
@endsection
