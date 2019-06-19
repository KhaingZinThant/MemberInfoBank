@extends('layout')
@section('content')
<div class="form-group">
	<a href="/" class="btn btn-info">Home</a>
</div>
<table class="table table-striped">
	<thead>
		  <tr>
		  	    <td>RoomName</td>
		  	    <td>Active</td>
		  	    <td>Remark</td>
		  	    <td colspan="2">Actions</td>
		  </tr>
	</thead>
	<tbody>
		@foreach($roomTypeVar as $room)
		<tr>
			<td>{{$room->roomTypeDesc}}</td>
			<td>{{$room->active}}</td>
			<td>{{$room->remark}}</td>
        <td>
			<a href="{{route('roomTypeCN.edit',$room->roomTypeId)}}" 
				class="btn btn-primary">Edit</a>
		</td>
		<td>
			  <form method="POST" action="{{route('roomTypeCN.destroy',$room->roomTypeId)}}">
			  	@csrf
			  	@method('DELETE')
			  	<button class="btn btn-danger" type="submit">Delete
			  	</button>
			  </form>
		</td>
		</tr>
		@endforeach
	</tbody>

</table>


@endsection