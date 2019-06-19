@extends('layout')
@section('content')
<form action="{{route('religionCN.store')}}" method="post">
	@csrf
	<div class="form-group">
		<label><h2>Religion Name</h2></label>
		<input type="text" name="religionDesc" class="form-control">

	</div>

	<div class="form-group">
		<label><h2>Active</h2></label>
		<input type="checkbox" name="active" class="form-control" value="1">
	</div>

	<div class="form-group">
		<label><h2>Remark</h2></label>
		<textarea name="remark" value="" class="form-control"></textarea>	
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-info">Submit</button>
	</div>
</form>
@endsection