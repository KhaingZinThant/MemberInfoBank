@extends('layout')
@section('title','Room Type View')
@section('content')
<form action="{{route('roomTypeCN.store')}}" method="post">
	@csrf
	<h1 align="center"><i>Member Info Bank</i></h1><br>
	<label><h2>RoomName: </h2></label>
	<input type="text" name="roomTypeDesc"><br>
	<label><h2>Active: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</h2></label>
	<input type="checkbox" name="active" value="1"><br>
    <label><h2>Remark :&nbsp;&nbsp;&nbsp;&nbsp;</h2></label>
	<textarea name="remark"></textarea><br><br>
	<button type='submit'>Submit</button>
</form>
@endsection