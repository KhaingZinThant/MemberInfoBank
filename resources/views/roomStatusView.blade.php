@extends('layout')
@section('title','Member Info Bank')
@section('content')

<link rel="stylesheet" href="css/roomStatusViewStyle.css">
<form action="{{route('roomStatusCN.store')}}" method="post">
	@csrf
	<div class="form-group">
		<label>Room Status</label>
		<input type="text" name="roomStatusDesc" class="form-control">

	</div>

	<div class="form-group form-check">
		<label class="form-check-label">Active</label>
			<input type="checkbox" name="active" class="form-check-input" value="1">
		
	</div>

	<div class="form-group">
		<label>Remark</label>
		<textarea name="remark" value="" class="form-control"></textarea>	
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-info">Submit</button>
	</div>

</form> 
@endsection
