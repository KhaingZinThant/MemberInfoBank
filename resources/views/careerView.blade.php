@extends('layout')
@section('content')
<form action="{{route('careerCN.store')}}" method="post">
	@csrf
	<div class="jumbotron jumbotron-fluid text-center"><h1>Member Info Bank</h1></div>
	<div class="bg-light">
		<div class="form-group">
		<label  for="careerDesc">Career Name:</label>
		<input type="text" name="careerDesc" class="form-control" id="careerDesc" placeholder="CareerName">
	</div>
	<div class="form-group">
		<label>Active</label>
		<input type="checkbox" name="active" class="form-check-control" value="1" checked="">
	</div>
	<div class="form-group">
		<label for="remark">Remark:</label>
		<textarea name="remark" id="remark" class="form-control">
			
		</textarea>
	</div>
	<div class="form-group">
		<button name="Submit" class="btn btn-info" type="submit">Submit</button>
	</div>
	</div>
	
</form>
@endsection