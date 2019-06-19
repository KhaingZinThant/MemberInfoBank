@extends('layout')
@section('content')
<form action="{{route('personStatusCN.store')}}" method="post" style="padding-top: 50px;color:black">
	@csrf
	<h1 style="font-family:Bahnschrift Light; color:darkblack "><b>Member Info Bank</b></h1><br>

	<div class="form-group" >

		
	<table>

		<tr>
			<td> Status Type:</td>
			<td><input type="textbox" name="statusDesc" class="form-control"></td>
		</tr>
		<tr>
			<td>Active:	</td>
			<td><input type="checkbox" name="active"  value="1"></td>
			
		</tr> 
		<tr>
			<td>Remark:</td>
			<td><textarea name="remark" class="form-control"></textarea></td>
		</tr>
		
	</table><br>
	 </div>
	<button type="submit" class="btn btn-info">submit </button>
		<a href="{{route('personStatusCN.index')}}" class="btn btn-primary">View</a>
		
  

	</form>


@endsection