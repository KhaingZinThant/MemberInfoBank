@extends('layout')
@section('content')
<a href="/" class="btn btn-success mt-5 mb-2">Insert</a>
<div class="uper">
	@if (session()->get('success'))
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismission="alert">&times;</button>
		{{session()->get('success')}}
	</div>
	@endif
</div>
<div class="uper">
	@if (session()->get('delete'))
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismission="alert">&times;</button>
		{{session()->get('delete')}}
	</div>
	@endif
</div>
<table class="table table-striped table-borderless table-hover bg-light">
	<thead class="font-weight-bold">
		<tr>
			<td>Nationality Name</td>
			<td>Active</td>
			<td>Remark</td>
			<td colspan="2">actions</td>
			
			
		</tr>
	</thead>
	<tbody>
		@foreach($majorVar as $majorss)
		<tr>
			<td>{{$majorss->majorDesc}}</td>
			<td>{{$majorss->active}}</td>
			<td>{{$majorss->remark}}</td>
			<td><a href="{{route('majorCN.edit',$majorss->majorId)}}" class="btn btn-info">Edit</a></td>
        
			 <td>
        <form action="{{route('majorCN.destroy',$majorss->majorId)}}" method="Post">
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