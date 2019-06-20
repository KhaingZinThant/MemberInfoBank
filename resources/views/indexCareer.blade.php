@extends('layout')
@section('content')
<a href="/career" class="btn btn-success mt-5 mb-2">Add New</a>
<div class="uper">
	 @if (session()->get('success'))
	 <div class="alert alert-success alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         {{ session()->get('success')}}
    </div>
     @endif
</div>
<div class="uper">
	 @if (session()->get('delete'))
	 <div class="alert alert-danger alert-dismissible">
         <button type="button" class="close" data-dismiss="alert">&times;</button>
         {{ session()->get('delete')}}
    </div>
     @endif
</div>
<table class="table table-striped table-borderless table-hover bg-light ">
	<thead class="font-weight-bold">
		<tr>
			<td>Career Name</td>
			<td>Active</td>
			<td>Remark</td>
			<td colspan="2">Actions</td>
		</tr>
	</thead>
	<tbody>
		@foreach($careerVar as $career)
			<tr>
			<td>{{$career->careerDesc}}</td>
			<td>{{$career->active}}</td>
		    <td>{{$career->remark}}</td>
			<td>
				<a href="{{route('careerCN.edit',$career->careerId)}}" class="btn btn-primary">Edit</a>
			</td>
			<td>
				<form action="{{route('careerCN.destroy',$career->careerId)}}" method='post'>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection