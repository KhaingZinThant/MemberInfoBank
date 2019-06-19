@extends('layout')
@section('content')
<form action="{{route('channelCN.update',$channelVar->channelId)}}" method="POST">
@csrf
@method('PATCH')
<h1><b>Member Info Bank</b></h1><br>
<div class="form-group row">
    <label for="cname" class="col-sm-2 col-form-label">ChannelName</label>
    <div class="col-sm-5">
    <input type="text" name="channelDesc" class="form-control" value="{{$channelVar->channelDesc}}">
    </div>
</div>
<div class="form-group row">
        <label for="cname" class="col-sm-2 col-form-label">Active</label>
        <div class="col-sm-5">
        <input type="checkbox" name="active" value="1" checked="" value="{{$channelVar->active}}">
        </div>
    </div>
<div class="form-group row">
        <label for="cname" class="col-sm-2 col-form-label">Remark </label>
        <div class="col-sm-5">
        <textarea name="remark" class="form-control" value="{{$channelVar->remark}}"></textarea>
        </div>
</div>

<div class="form-group row mb-0">
            <div class="col-md-2 offset-md-2">
            <button type="submit" class="btn btn-primary">Submit</button>
 </div>
 <div class="col-md-4 offset-md-0">
    <button type="reset" class="btn btn-primary">Clear</button>
</div>

</div>

</form>
    
@endsection