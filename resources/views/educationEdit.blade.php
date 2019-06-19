@extends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

<div class="container">
  
  
  	<form action="{{route('educationCN.update',$educationVar->educationId) }}" method="Post">
@method('PATCH')
@csrf
<div class="bg-light mt-5 mb-5">
    <div class="form-group">
      <label for="educationVar">Education</label>
      <input type="text" class="form-control" name="educationDesc" placeholder="Enter Education .." value="{{$educationVar->educationDesc}}">
    </div>

    
    <div class="checkbox">
      <label><input type="checkbox" name="active" checked="" value="1" value="{{$educationVar->active}}"> Active</label>
    </div>

    <div class="form-group">
	<label for='remark'>Remark</label>
	
</div>

<div class="form-group">
	<textarea rows="5" cols="30" name="remark" class="form-control" value="{{$educationVar->remark}}"></textarea>
	</div>

    <button type="submit" class="btn btn-default">Update</button>
    
    @csrf
  </form>
</div>

</body> 
</html>
@endsection