@extends('layout')
@section('content')
<form action="{{route('roomTypeCN.update',$roomTypeVar->roomTypeId)}}" method="post">
	@method('PATCH')
	@csrf
	<div class="form-group">
	<label>
		<h2>RoomName</h2>
	</label><br>
	<input type="text" name="roomTypeDesc" value="{{$roomTypeVar->roomTypeDesc}}" class="form-control">
   </div>
<br>
    <div class="form-group">
	<label>
		<h2>Active: </h2>
	</label><br>
	<input type="checkbox" name="active" value="{{$roomTypeVar->active}}" class="form-control">
  </div>
  <br>
  <div class="form-group">
    <label>
    	<h2>Remark :</h2>
    </label><br>
	<textarea name="remark" value="{{$roomTypeVar->remark}}" class="form-control"></textarea>
</div><br><br>
	<button type='submit'>Update</button>
</form>
@endsection