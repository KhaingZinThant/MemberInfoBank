@extends('layout')
@section('content')
<form action="{{route('careerCN.update',$careerVar->careerId)}}" method="post">
	@method('PATCH')
	@csrf
	<div class="bg-light mt-5 mb-5">
		
		<div class="form-group">
		<label>Career Name:</label>
		<input type="text" name="careerDesc" class="form-control" value="{{$careerVar->careerDesc}}">
	</div>
	<div class="form-group">
		<label>Active:</label>
		<input type="checkbox" name="active" class="form-check-control" value="{{$careerVar->active}}" checked="">
	</div>
	<div class="form-group">
		<label>Remark:</label>
		<textarea name="remark" value="{{$careerVar->remark}}" class="form-control">
			
		</textarea>
	</div>
	<div class="form-group">
		<button name="Submit" class="btn btn-info" type="submit">Submit</button>
		 
	</div>
	</div>
	</form>
@endsection