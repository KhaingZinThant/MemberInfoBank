@extends('layout')
@section('content')
<form action="{{route('majorCN.update',$majorVar->majorId)}}" method="Post">
  @method('PATCH')
  @csrf
  <div class="bg-light mt-5 mb-5">
	<div class="form-group row">
     <label for="des" class="col-sm-2 col-form-label">MajorName</label>
     <div class="col-sm-5">     
      <input type="text" name="majorDesc" value="{{$majorVar->majorDesc}}"></div></div>

   <div class="form- row">
   	   <label for="act" class="col-sm-2 col-form-label">Active</label>
       <div class="col-sm-5">
       <input type="checkbox" name="active" value="{{$majorVar->active}}" checked="">
   </div></div><br>

    <div class="form-group row">
       <label for="re" class="col-sm-2 col-form-label">Remark:</label>
       <div class="col-sm-5">
       <textarea name="remark" value="{{$majorVar->remark}}"></textarea>
   </div></div><br>

      <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
   	<button type="submit" class="btn btn-info">Update</button>
   </div></div>

</div></form>
<script type="text/javascript"></script>
@endsection