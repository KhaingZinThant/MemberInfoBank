xtends('layout')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="../assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center mb-5 mt-5">Register Form</h1>
    <div class="row">
        <div class="col-md-6">
            <form action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text "><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Name">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="NRC">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-home"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Region">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-flag"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Nationality">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-map"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="City">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Phone Number">
                </div>
                <div class="form-group row">
                    <label for="nrc" class="col-md-4">Channel</label>
                    <select name="cars" class="custom-select col-md-6">
                        <option selected>Facebook</option>
                        <option value="volvo">Radio</option>
                        <option value="fiat">Supervisor</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-shield"></i></span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Supervisor">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form action="">
				<div class="form-group row">
                    <label for="name" class="col-md-4">Gender</label>
                    <div class="custom-control custom-radio custom-control-inline col-md-6">
                        <input type="radio" class="mr-2">Male
                        <input type="radio" class="ml-2 mr-2">Female
                    </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Person Type">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Person Status">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Job Description Career">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Education">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Education / Year">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="Major / Grade">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">@</span>
                    </div>
                    <input type="text" class="col-md-6 form-control" placeholder="University / School">
                </div>
            </form>
        </div>
    </div>
    <button class="btn btn-info d-flex align-self-center">Submit</button>
</div>
<script type="text/javascript" src="../assets/script/bootstrap.min.js"></script>
</body>
</html>
@endsection