@extends('layout')
@section('content')




<!DOCTYPE html>
<html>
<head>
  
  <title>MemberInfoBank</title>
</head>
<body>

<form action="{{route('educationYearCN.store')}}" method="Post" style="padding-top: 50px;color: black">

<div class="container">
<div class="jumbotron jumbotron-fluid">
 
     
      <h2 align="center">Member Infomation Bank</h2>


<div class="container">
  
    <div class="form-group">
      <label for="educationYearVar">Education Year</label>
      <input type="text" class="form-control" name="educationYearDesc" placeholder="Enter Education year..">
    </div>

    
    <div class="form-group">
      <label for="active"> Active </label>
      <input type="checkbox" name="active" checked="" value="1">
    </div>

    <div class="form-group">
	<label for='remark'>Remark</label>
	
</div>

<div class="form-group">
	<textarea rows="5" cols="30" name="remark" class="form-control"></textarea>
	</div>

 <div class="form-group row mb-0">
  <div class="col-md-4 offset-md-0">
    <button type="submit" class="btn btn-default btn-default">
          <span class="glyphicon glyphicon-ok-circle"></span> OK
        </button>
  </div>

  
 <div class="col-md-4 offset-md-0">
        <button type="reset" class="btn btn-reset btn-default">
          <span class="glyphicon glyphicon-remove-circle"></span> Clear
        </button>
  </div>
</div>


</div>      
</div>


   
    @csrf
  </form>
</div>

</body> 
</html>

@endsection