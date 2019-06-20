<!DOCTYPE html>
<html>
<head>
    <title>Member Info Bank</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('font/css/font-awesome.min.css')}}">
    
    <style type="text/css">
        
        #loginform {
            background: linear-gradient(to top left, #a9d2d6 0%, #d1e9ed 100%);
            width: 500px;
            height: 430px;
            margin: 100px auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        #loginBody {
            width: 100%;
            background-color: #daedf1;
        }

        #loginh1 {
            font-family: "Rockwell";
            color: #51737b;
        }

        #loginButton {
            background-color: #6D959F;
        }

        #loginButton:hover {
            background-color: #5b818b;
            color: white;
        }

    </style>
</head>
<body id="loginBody">
<div id="loginform">
    <h1 class="pt-5 mb-3 text-center" id="loginh1">Member Info Bank</h1>
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
                        <button class="btn p-2 pl-4 pr-4" id="loginButton">Login</button>
                    </div>
                </div>
                <div class="text-center">Didn't Have Account?<a href="/">Register</a></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>