@extends('masterLayout')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Member Info Bank</h2>
<div id="loginform">
  <form action="{{route('avoidFoodCN.store')}}" method="post" style="padding-top: 50px;color:black">
    @csrf
     <div class="container mt-5">
        <div class="row justify-content-center align-items-center col-12">
            <form>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="col-md-12 form-control" placeholder="User Name">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                    </div>
                    <input type="text" class="col-md-12 form-control" placeholder="Password">
                </div>
                <div class="form-group row pt-2">
                    <div class="col-md-12">
                        <input type="checkbox" name="rm" id="rm" class="form-check-input ml-2 pt-0">
                        <label for="rm" class="form-check-label ml-4 p-0">Remember Me</label>
                    </div>
                </div>
                <div class="form-group row pt-2">
                    <div class="col-md-4"></div>
                    <div class="col-md-6 ml-2">
                        <button class="btn p-2 pl-4 pr-4">Login</button>
                    </div>
                </div>
                <div class="text-center">Didn't Have Account?<a href="/">Register</a></div>
            </form>
        </div>
    </div>
</body>
</html>
@endsection