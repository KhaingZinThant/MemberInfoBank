@extends('layout')
@section('content')

<h2 style="text-align: center;">View List</h2>
<table class="table table-stripped table-borderless table-hover bg-light" >
	<thead class="font-weight-bold">
	<tr><a style="float: right" href="/" class="btn btn-success">Register Now</a></tr>
	<tr>
		<th><input type="checkbox" name="selectall"></th>
		<th>Person Name</th>
		<th>Country Name</th>
		<th>State Name</th>
	</tr>
	</thead>
	<tbody>
	@foreach($infoVar as $person)
	<tr>
		<td><input type="checkbox" name="select"></td>
		<td>{{$person->personName}}</td>
		<td>{{$person->country}}</td>
		<td>{{$person->state}}</td>
		
	</tr>
	</tbody>
@endforeach
</table>
@endsection