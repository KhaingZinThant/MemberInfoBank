@extends('layout')
@section('content')


	<link rel="stylesheet" href="css/roomStatusIndexStyle.css">
	<h1>Hello World Mingalarpar</h1>
	<a href="/" class="btn btn-primary" margin-top="5">New <span><i class="fas fa-folder-plus"></i></span> </a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Room Status</th>
				<th>Active</th>
				<th>Remark</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			@foreach($roomStatusVar as $roomStatus)
			<tr>
				<td>{{$roomStatus->roomStatusDesc}}</td>
				<td>{{$roomStatus->active}}</td>
				<td>{{$roomStatus->remark}}</td>
				<td>
					<a href="{{route('roomStatusCN.edit',$roomStatus->roomStatusId)}}" class="btn btn-primary"><span><i class="fas fa-tools"></i></span></a>
				</td>
				<td>
					<form action="{{route('roomStatusCN.destroy',$roomStatus->roomStatusId)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit"><span><i class="fas fa-trash-alt"></i></span></button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection