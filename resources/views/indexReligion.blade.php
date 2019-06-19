@extends('layout')
@section('content')

	<a href="/" class="btn btn-primary" margin-top="5">New</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Religion Name</th>
				<th>Active</th>
				<th>Remark</th>
				<th colspan="2">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($religionVar as $religion)
			<tr>
				<td>{{$religion->religionDesc}}</td>
				<td>{{$religion->active}}</td>
				<td>{{$religion->remark}}</td>
				<td>
					<a href="{{route('religionCN.edit',$religion->religionId)}}" class="btn btn-primary">Edit</a>
				</td>
				<td>
					<form action="{{route('religionCN.destroy',$religion->religionId)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection