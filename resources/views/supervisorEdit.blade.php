@extends('layout')
@section('content')
<form action="{{route('supervisorCN.update',$supervisorVar->supervisorId)}}" method="post" >
@method('PATCH')
@csrf
<h1><b>Member Info Bank</b></h1><br>
<div class="form-group row">
    <label for="sname" class="col-sm-2 col-form-label">SupervisorName</label>
    <div class="col-sm-5">
    <input type="text" name="supervisorDesc" value="{{$supervisorVar->supervisorDesc}}">
</div>
</div>

<div class="form-group row">
    <label for="sph" class="col-sm-2 col-form-label">SupervisorPhoneNumber</label>
    <div class="col-sm-5">
    <input type="text" name="supervisorPhno" class="form-control" value="{{$supervisorVar->supervisorPhno}}">
</div>
</div>

<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">SupervisorEmail</label>
    <div class="col-sm-5">
    <input type="text" name="supervisorEmail" class="form-control" value="{{$supervisorVar->supervisorEmail}}">
    </div>
</div>

<div class="form-group row">
    <label for="sadd" class="col-sm-2 col-form-label">SupervisorAddress</label>
    <div class="col-sm-5">
    <input type="text" name="supervisorAddress" class="form-control" value="{{$supervisorVar->supervisorAddress}}">
</div>
</div>

<div class="form-group row">
        <label for="sact" class="col-sm-2 col-form-label"> Active</label>
        <div class="col-sm-5">
        <input type="checkbox" name="active"  checked="" value="{{$supervisorVar->active}}">
    </div>
    </div>

<div class="form-group row">
    <label for="sremark" class="col-sm-2 col-form-label"> Remark</label>
    <div class="col-sm-5">
    <textarea name="remark" cols="20px" rows="10px" class="form-control" value="{{$supervisorVar->remark}}"></textarea>
</div>
</div><br>


<div class="form-group row mb-0">
    <div class="col-md-2 offset-md-2">
<button type="submit" class="btn btn-info" style="text-align:center">Submit</button>
</div>

<div class="col-md-4 offset-md-0">
    <button type="submit" class="btn btn-info" style="text-align:center">Cancel</button>
</div>

</div>

  

</form>
@endsection
