@extends('layout')
@section('content')

	<a href="/" class="btn btn-success mt-5 mb-5">Home</a>
	<div class="upper">
		@if(session()->get('success'))
		<div class="alert alert-success alert-dismissable">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			{{session()->get('success')}}
		</div>
		@endif
	</div>
	

<div class="upper">
	@if (session()->get('delete'))
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert">&times;
		</button>
		{{session()->get('delete')}}
	</div>
     @endif
    </div>

<table class="table table-striped">

	<thead>
		  <tr>
		  	    <td>FloorName</td>
		  	    <td>Active</td>
		  	    <td>Remark</td>
		  	    <td colspan="2">Actions</td>
		  </tr>
	</thead>
	<tbody>
		@foreach($floorVar as $floor)
		<tr>
			<td>{{$floor->floorDesc}}</td>
			<td>{{$floor->active}}</td>
			<td>{{$floor->remark}}</td>
        <td>
			<a href="{{route('floorCN.edit',$floor->floorId)}}" 
				class="btn btn-primary">Edit</a>
		</td>
		<td>
			  <form method="POST" action="{{route('floorCN.destroy',$floor->floorId)}}">
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