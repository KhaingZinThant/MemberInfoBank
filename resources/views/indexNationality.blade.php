@extends('layout')
@section('content') 
<a href="/nationality" class="btn btn-success">New</a>
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
	<thead>
		<tr>
			<td>Nationality Name</td>
			<td>Active</td>
			<td>Remark</td>
			<td colspan="2">actions</td>
			
		</tr>
	</thead>
	<tbody>
		@foreach($nationalityVar as $nationalitye)
		<tr>
			<td>{{$nationalitye->nationalityDesc}}</td>
			<td>{{$nationalitye->active}}</td>
			<td>{{$nationalitye->remark}}</td>
			<td>
				<a href="{{route('nationalityCN.edit',$nationalitye->nationalityId)}}" class="btn btn-info">Edit</a>
			</td>
			<td>
				<form action="{{route('nationalityCN.destroy',$nationalitye->nationalityId)}}" method="POST">
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