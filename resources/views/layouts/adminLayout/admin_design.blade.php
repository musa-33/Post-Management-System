<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset("css/backend_css")}}/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset("css/backend_css")}}/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="{{asset("css/backend_css")}}/fullcalendar.css" />
    <link rel="stylesheet" href="{{asset("css/backend_css")}}/matrix-style.css" />
    <link rel="stylesheet" href="{{asset("css/backend_css")}}/matrix-media.css" />
    <link href="{{asset("font/css")}}/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset("css/backend_css")}}/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
@include('layouts.adminLayout.admin_header')
<!--close-Header-part-->

<!--sidebar-menu-->
@include('layouts.adminLayout.admin_sidebar')
<!--main-container-part-->
@yield('contents')
<!--end-main-container-part-->

<!--Footer-part-->

@include('layouts.adminLayout.admin_footer')

<!--end-Footer-part-->

<script src="{{asset("js/backend_js")}}/excanvas.min.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.min.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.ui.custom.js"></script>
<script src="{{asset("js/backend_js")}}/bootstrap.min.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.flot.min.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.flot.resize.min.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.peity.min.js"></script>
<script src="{{asset("js/backend_js")}}/fullcalendar.min.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.dashboard.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.gritter.min.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.interface.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.chat.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.validate.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.form_validation.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.wizard.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.uniform.js"></script>
<script src="{{asset("js/backend_js")}}/select2.min.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.popover.js"></script>
<script src="{{asset("js/backend_js")}}/jquery.dataTables.min.js"></script>
<script src="{{asset("js/backend_js")}}/matrix.tables.js"></script>

<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>

        {{--<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Starter</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">HEADER</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="#"><i class="fa fa-file"></i> <span>Posts</span></a></li>


                    <li class="active"><a href="{{url('category')}}"><i class="fa fa-microchip"></i> <span>Category</span></a></li>



                    <li><a href="#"><i class="fa fa-users"></i> <span>Manage User</span></a></li>
                    <li><a href="#"><i class="fa fa-gears"></i> <span>Settings</span></a></li>

                <li class="">

                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off text-red"></i>   <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content container-fluid">
            @yield('contents')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>
</div>


<script src="{{asset('js/app.js')}}"></script>



</body>
</html>--}}
