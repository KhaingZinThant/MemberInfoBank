@extends('layout')
@section('content')


<!DOCTYPE html>
<html>
<head>
  
</head>
<body>

<div class="container">
 <div class="jumbotron jumbotron-fluid"> 
  
  	<form action="{{route('educationYearCN.update',$educationYearVar->educationYearId) }}" method="Post">
@method('PATCH')
@csrf
<div class="container">
    <div class="form-group">
      <label for="educationYearVar">Education Year</label>
      <input type="text" class="form-control" name="educationYearDesc" placeholder="Enter Education year.." value="{{$educationYearVar->educationYearDesc}}">
    </div>

    
    <div class="form-group">
      <label for="active"> Active </label>
      <input type="checkbox" name="active" checked="" value="1" value="{{$educationYearVar->active}}">
    </div>

    <div class="form-group">
	<label for='remark'>Remark</label>
	
</div>

<div class="form-group">
	<textarea rows="5" cols="30" name="remark" class="form-control" value="{{$educationYearVar->remark}}"></textarea>
	</div>

    <button type="submit" class="btn btn-default">Update</button>
  </div>
    @csrf
  </form>
</div>
  </div>

</body> 
</html>

@endsection