@extends('layout')
@section('content')
<a href="/" class="btn btn-success">New</a>
<div class="uper">
@if (session()->get('success'))	
<div class="alert alert-success alert-dismissible">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	{{session()->get('success')}}
</div>
@endif
</div>
<div class="uper">
@if (session()->get('delete'))	
<div class="alert alert-danger alert-dismissible">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	{{session()->get('delete')}}
</div>
@endif
</div>
<table class="table table-stripped table-borderless table-hover bg-light">
	<thead class="font-weight-bold">
	<tr>
		<th><input type="checkbox" value="1" name=""></th>
		<th>City Name</th>
		<th>Active</th>
		<th>Remark</th>
		<th colspan="2">Actions</th>
	</tr>
	</thead>
	<tbody>
	@foreach($cityVar as $city)
	<tr>
		<td><input type="checkbox" value="1" name=""></td>
		<td>{{$city->cityDesc}}</td>
		<td>{{$city->active}}</td>
		<td>{{$city->remark}}</td>
		<td><a href="{{route('cityCN.edit',$city->cityId)}}" class="btn btn-primary">Edit</a></td>
		<td><form action="{{route('cityCN.destroy', $city->cityId)}}" method="Post">
			@csrf
			@method('DELETE')
			<button class="btn btn-danger" type="submit">Delete</button>
		</form>
	</td>
	</tr>
	</tbody>
@endforeach
</table>
@endsection