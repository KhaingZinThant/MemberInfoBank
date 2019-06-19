@extends('layout')
@section('content')
<form action="{{route('nationalityCN.update',$nationalityVar->nationalityId)}}" method="Post">
  @method('PATCH')
  @csrf
	<div class="form-group row">
     <label for="des" class="col-sm-2 col-form-label">NationalityName</label>
     <div class="col-sm-5">     
      <input type="text" name="nationalityDesc" value="{{$nationalityVar->nationalityDesc}}"></div></div>

   <div class="form- row">
   	   <label for="act" class="col-sm-2 col-form-label">Active</label>
       <div class="col-sm-5">
       <input type="checkbox" name="active" value="{{$nationalityVar->active}}" checked="">
   </div></div><br>

    <div class="form-group row">
       <label for="re" class="col-sm-2 col-form-label">Remark:</label>
       <div class="col-sm-5">
       <textarea name="remark" value="{{$nationalityVar->remark}}"  cols="20px" rows="10px"></textarea>
   </div></div><br>

      <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
   	<button type="submit" class="btn btn-info">Update</button>
   </div></div>

</form>
<script type="text/javascript"></script>
@endsection