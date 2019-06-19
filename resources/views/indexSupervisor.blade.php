@extends('layout')
@section('content')
<table class="table table-striped" >
    <thead>
        <tr>
            <td>SupervisorName</td>
            <td>SupervisorPhno</td>
            <td>SupervisorEmail</td>
            <td>SupervisorAddress</td>
            <td>Active</td>
            <td>Remark</td>
            <td colspan="2">Actions</td>
            <td>
            <a href="/" class="btn btn-primary">Insert</a>
                </td>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($supervisorVar as $supervisors)
           <tr>
           <td> {{$supervisors->supervisorDesc}}</td>
           <td> {{$supervisors->supervisorPhno}}</td>
           <td> {{$supervisors->supervisorEmail}}</td>
           <td> {{$supervisors->supervisorAddress}}</td>
           <td> {{$supervisors->active}}</td>
           <td> {{$supervisors->remark}}</td>
           <td>
           <a href="{{route('supervisorCN.edit',$supervisors->supervisorId)}}" class="btn btn-primary">Edit</a>
           </td>
           <td>
           <form action="{{route('supervisorCN.destroy',$supervisors->supervisorId)}}" method="post">
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