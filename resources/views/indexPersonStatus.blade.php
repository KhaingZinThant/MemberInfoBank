@extends('layout')
@section('content')
<a type="submit" class="btn btn-info"  href="/">Insert</a>
<table class="table table-striped" border="1px">

	<thead>
		<tr>
			<td>PersonStatus</td>
			<td>Active</td>
			<td>Remark</td>
			<td colspan="2"> Action</td>

		</tr>
	</thead>
	<tbody>
		@foreach($personStatusVar as $PersonStatus)
		<tr>
			<td>{{$PersonStatus->statusDesc}}</td>
			<td>{{$PersonStatus->active}}</td>
			<td>{{$PersonStatus->remark}}</td>
			<td>
				<a href="{{route('personStatusCN.edit',$PersonStatus->statusId)}}" class="btn btn-primary">Edit</a>
			</td>
			<td>
				<form action="{{route('personStatusCN.destroy',$PersonStatus->statusId)}}" method="POST" class="pull-right">
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit">DELETE</button>
				</form>
			</td>

		</tr>
		@endforeach
	</tbody>
	
</table>

@endsection