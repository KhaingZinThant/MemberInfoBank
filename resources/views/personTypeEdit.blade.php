@extends('layout')
@section('content')
<form action="{{route('personTypeCN.update' ,$personTypeVar->personId)}}" method="post" style="padding-top: 50px;color:black">
	@method('PATCH')
	@csrf	
	<h1 style="font-family:Bahnschrift Light"><b>Member Info Bank</b></h1><br>

	<div class="form-group">
	<table >
		<tr>
			<td>Person Name:</td>
			<td><input type="textbox" name="personDesc" class="form-control" value="{{$personTypeVar->personDesc}}"></td>
		</tr>

		<tr>
			<td>Active:</td>
			<td><input type="checkbox" name="active"  value="{{$personTypeVar->active}}"></td>
			
		</tr> 
		<tr>
			<td>Remark:</td>
			<td><textarea name="remark" class="form-control" value="{{$personTypeVar->remark}}"></textarea></td>
		</tr>
		
	</table><br>
	<div style="padding-left: 100px">
		<button type='submit' class="btn btn-info" align="center" name="submit" >Update</button>
	</div>
</div>
</form>
@endsection