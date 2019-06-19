@extends('layout')
@section('content')
<form action="{{route('majorCN.store')}}" method="Post" style="padding-top: 50px;color:black">
  @csrf
  <h1><b>Member Info Bank</b></h1><br>
	<div class="form-group row">
     <label for="des" class="col-sm-2 col-form-label">MajorName</label>
     <div class="col-sm-5">
     <input type="text" name="majorDesc" class="form-control"></div></div>

   <div class="form-group row">
   	   <label for="act" class="col-sm-2 col-form-label">Active</label>
       <div class="col-sm-5">
       <input type="checkbox" name="active" value="1" checked="">
       </div>
  </div>

    <div class="form-group row">
       <label for="re" class="col-sm-2 col-form-label">Remark:</label>
       <div class="col-sm-5">
       <textarea name="remark" class="form-control"></textarea>
   </div></div>

      <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
   	<button type="submit" class="btn btn-info">Submit</button>
   </div>
   
        <div class="col-md-4 offset-md-0">
    <button type="reset" class="btn btn-info">Clear</button>
   </div></div>

   

 
</form>
<script type="text/javascript"></script>
@endsection