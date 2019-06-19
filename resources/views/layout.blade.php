<!DOCTYPE html>
<html>
<head>
    <title>MemberInfoBank</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    {{--    CSS files--}}

    <link rel="stylesheet" href="{{asset('css/admin4b.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/app.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/bootstrap.min.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/dataTables.bootstrap.min.css'))}}">
    <link rel="stylesheet" type="text/css" href="{{(asset('css/jquery.dataTables.min.css'))}}">
        <link rel="stylesheet" type="text/css" href="{{(asset('css/dataTables.bootstrap4.min.css'))}}">
        <link rel="stylesheet" type="text/css" href="{{(asset('css/font-awesome-4.7.0/css/font-awesome.min.css'))}}">
        <link rel="stylesheet" type="text/css" href="{{(asset('css/fontawesome-5.8.2/fontawesome-free-5.8.2-web/css/fontawesome.min.css'))}}">
</head>
<body>
<div class="app">
    <div class="app-sidebar" id="">
        <div class="sidebar-header">
            <img src="{!! asset('img/logo.png') !!}" class="avatar">
            <div class="username">
                <span>User Name</span>
                <small>username@gmail.com</small>
            </div>
        </div>

        <div id="sidebar-nav" class="sidebar-nav">
            <!--         <span class="sidebar-nav-header">Super Master Form</span>-->
            <ul>
                <li>
                    <a href="">
                        <span class="sidebar-nav-icon fa fa-laptop"></span>
                        <span class="sidebar-nav-text">Register Form</span>
                    </a>
                </li>
            </ul>
            <hr>
            <!--        <span class="sidebar-nav-header">Master Forms</span>-->
            <ul>
                <li>
                    <a href="#generalInfo" data-toggle="collapse">
                        <span class="sidebar-nav-icon fa fa-square-o"></span>
                        <span class="sidebar-nav-text">General Information</span>
                    </a>
                    <ul id="generalInfo" class="collapse" data-parent="#sidebar-nav">
                        <li><a href="/personType">Person Type</a></li>
                        <li><a href="">Register Person Status</a></li>
                        <li><a href="">City</a></li>
                        <li><a href="">Job Description Career</a></li>
                        <li><a href="">Education</a></li>
                        <li><a href="">Uni / School</a></li>
                        <li><a href="">Major / Grade</a></li>
                        <li><a href="">Education Year</a></li>
                        <li><a href="">Religion</a></li>
                        <li><a href="">Nationality</a></li>
                        <li><a href="">Supervisor</a></li>
                        <li><a href="">Channel</a></li>
                        <li><a href="">Diseases</a></li>
                        <li><a href="/avoidFood">Avoid Foods</a></li>
                        <li><a href="">Building Donation</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#infoAndRule" data-toggle="collapse">
                        <span class="sidebar-nav-icon fa fa-info"></span>
                        <span class="sidebar-nav-text">Information & Rule</span>
                    </a>
                    <ul id="infoAndRule" class="collapse" data-parent="#sidebar-nav">
                        <li><a href="">Homepage Information</a></li>
                        <li><a href="">Batch and Rule</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#register" data-toggle="collapse" aria-expanded="false">
                        <span class="sidebar-nav-icon fa fa-list-ol"></span>
                        <span class="sidebar-nav-text">Register</span>
                    </a>
                    <ul id="register" class="collapse" data-parent="#sidebar-nav">
                        <li><a href="">Member List</a></li>
                        <li><a href="">Grading</a></li>
                        <li><a href="">Room Assign</a></li>
                    </ul>

                </li>
                <li>
                    <a href="#report" data-toggle="collapse" aria-expanded="false">
                        <span class="sidebar-nav-icon fa fa-book"></span>
                        <span class="sidebar-nav-text">Report</span>
                    </a>
                    <ul id="report" class="collapse" data-parent="#sidebar-nav">
                        <li><a href="">Summary Report</a></li>
                        <li><a href="">Detail Report</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#about" data-toggle="collapse">
                        <span class="sidebar-nav-icon fa fa-info"></span>
                        <span class="sidebar-nav-text">About</span>
                    </a>
                </li>
            </ul>
                <hr>
            <ul>
                <li>
                    <a href=""><span class="sidebar-nav-icon fa fa-power-off text-danger"></span>
                        <span class="sidebar-nav-text">Log out</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="app-content">
        <div class="content-header">
            <nav class="navbar navbar-expand cus-nav">
                <div class="navbar-brand">
                    <button class="btn btn-sidebar d-lg-none" type="button" data-toggle="sidebar">
                        <i class="fa fa-bars mr-1 text-secondary"></i>
                    </button>
                    <div class="username">
                        <span>Member Info Bank</span>
                        <small></small>
                    </div>
                </div>
            </nav>
            <nav>

            </nav>
        </div>
        <div class="content-body">
            <div class="container">
                @yield('content')
             
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/admin4b.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('datatable/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/docs.js')}}"></script>
<script type="text/javascript" src="{{(asset('js/app.js'))}}"></script>
      <script type="text/javascript" src="{{(asset('js/jquery.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/jquery.min.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/jquery.dataTables.min.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/dataTables.bootstrap.min.js'))}}"></script>
    <script type="text/javascript" src="{{(asset('js/dataTables.bootstrap4.min.js'))}}"></script>
     <script type="text/javascript" src="{{(asset('js/bootstrap.min.js'))}}"></script>
        <script type="text/javascript" src="{{(asset('js/jquery.datatables.min.js'))}}"></script>
        <script type="text/javascript" src="{{(asset('js/jquery.validate.js'))}}"></script>
</body>
</html>
