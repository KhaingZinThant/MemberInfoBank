@extends('layout')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <td>Channel Name</td>
            <td>Active</td>
            <td>Remark</td>
            <td colspan="2">Actions</td>
        <td><a href="/" class="btn btn-info">Insert</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach($channelVar as $channel)
        <tr>
        <td>{{$channel->channelDesc}}</td>
        <td>{{$channel->active}}</td>
        <td>{{$channel->remark}}</td>
        <td><a href="{{route('channelCN.edit',$channel->channelId)}}" class="btn btn-info">Edit</a></td>
        <td>
        <form action="{{route('channelCN.destroy',$channel->channelId)}}" method="Post">
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