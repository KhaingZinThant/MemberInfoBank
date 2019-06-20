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
<form action="{{route('majorCN.store')}}" method="Post" style="padding-top: 50px;color:black">
  @csrf
  <h1><b>Member Info Bank</b></h1><br>
  <div class="form-group row">
     <label for="des" class="col-sm-2 col-form-label">MajorName</label>
     <div class="col-sm-5">
     <input type="text" name="majorDesc" class="form-control"></div></div>

   <div class="form-group row">
       <label for="act" class="col-sm-2 col-form-label">Active</label>
       <div class="col-sm-5">
       <input type="checkbox" name="active" value="1" checked="">
       </div>
  </div>

    <div class="form-group row">
       <label for="re" class="col-sm-2 col-form-label">Remark:</label>
       <div class="col-sm-5">
       <textarea name="remark" class="form-control"></textarea>
   </div></div>

      <div class="form-group row mb-0">
        <div class="col-md-2 offset-md-2">
    <button type="submit" class="btn btn-info">Submit</button>
   </div>
   
        <div class="col-md-4 offset-md-0">
    <button type="reset" class="btn btn-info">Clear</button>
   </div></div>

   

 
</form>
<script type="text/javascript"></script>
</body>
</html>