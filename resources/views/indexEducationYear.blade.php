@extends('layout')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
	
  <title>MemberInfoBank</title>

  <style type="text/css">
    .bs-example{
        margin: 20px;
    }
  </style>
  
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        
      <!--  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>-->

        <div class="collapse navbar-collapse" id="navbarCollapse">

        
            <div class="navbar-nav ml-auto">
                 <a href="/educationYear" class="btn btn-success mt-5 mb-2" >Add New</a>
            </div>
        </div>
    </nav>
 </div>


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
<div class="container">
  
  <table class="table table-striped table-borderless table-hover bg-light">
    <thead class="font-weight-bold">

      <tr>
      	<th> </th>
        <th>Education Year</th>
        <th>Active</th>
        <th>Remark</th>
        <th colspan="1">Action</th>
		<th>
			
		</th>
      </tr>
    </thead>
    <tbody>
     @foreach($educationYearVar as $e)
	<tr>
 		<td><input type="checkbox" name="active" value="1"></td>
		<td>{{$e->educationYearDesc}}</td>
		<td>{{$e->active}}</td>
		<td>{{$e->remark}}</td>
		
		<td>
			<a href="{{route('educationYearCN.edit',$e->educationYearId)}}" class="glyphicon glyphicon-edit"></a>

		</td>
       

		<td>
		<form action="{{route('educationYearCN.destroy',$e->educationYearId)}}" method="Post">
			@method('DELETE')
			
			<button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-trash"></span>
        </button>
			
		
		@csrf
		</form>
	</td>
	
	</tr>
	@endforeach
    </tbody>
  </table>
 
</div>

</body>
</html>


@endsection