@extends('layout')
@section('content')
<form action="{{route('floorCN.update',$floorVar->floorId)}}" method="post">
	@method('PATCH')
	@csrf

	
	
	<div class="form-group">
	<label>
		<h2>FloorName</h2>
	</label><br>
	<input type="text" name="floorDesc" value="{{$floorVar->floorDesc}}" class="form-control">
   </div>
<br>
    
    <div class="form-group">
	<label>
		<h2>Active: </h2>
	</label><br>
	<input type="checkbox" name="active" value="{{$floorVar->active}}" class="form-control">
  </div>
  <br>

  <div class="form-group">
    <label>
    	<h2>Remark :</h2>
    </label><br>
	<textarea name="remark" value="{{$floorVar->remark}}" class="form-control"></textarea>
</div><br><br>
	
	<button type='submit'>Update</button>
</form>
@endsection