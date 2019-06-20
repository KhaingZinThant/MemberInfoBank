@extends('layout')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <td>Uni/School Name</td>
            <td>Active</td>
            <td>Remark</td>
            <td colspan="2">Actions</td>
        <td><a href="/" class="btn btn-info">Insert</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach($schoolVar as $school)
        <tr>
        <td>{{$school->schoolDesc}}</td>
        <td>{{$school->active}}</td>
        <td>{{$school->remark}}</td>
        <td><a href="{{route('schoolCN.edit',$school->schoolId)}}" class="btn btn-info">Edit</a></td>
        <td>
        <form action="{{route('schoolCN.destroy',$school->channelId)}}" method="Post">
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