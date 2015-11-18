<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset('dist/css/skins/_all-skins.min.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>LT</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>IT</b>Max Learning Portal</span>

        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </a>

            <row class="row center-block">
                <div class="col-md-1 col-md-offset-11 ">

                    <a href="{{URL::route('sign-out')}}"><button class="btn btn-block btn-danger btn-floating" >Logout</button></a>
                </div>

            </row>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{Auth::user()->username}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                @if(Auth::user()->role==='admin')
                <li class="active treeview">
                    <a href="{{URL::route('admin-view')}}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-group"></i>
                        <span>Teachers</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{URL::route('add-teacher-form')}}"><i class="fa fa-circle-o"></i> Add Teachers</a></li>
                        <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Manage Teachers</a></li>
                    </ul>
                </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-graduation-cap"></i>
                            <span>Students</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::route('add-student-form')}}"><i class="fa fa-circle-o"></i> Add Students</a></li>
                            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Manage Students</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-file"></i>
                            <span>Courses</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{URL::route('add-course')}}"><i class="fa fa-circle-o"></i> Add Courses</a></li>
                            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Manage Courses</a></li>
                        </ul>
                    </li>
                @endif

                @if(Auth::user()->role==='teacher')

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-group"></i>
                            <span>Students</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> Add Grades</a></li>
                            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> List Students</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-group"></i>
                            <span>My Courses</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                    </li>
                    @endif

                @if(Auth::user()->role==='student')

                    <li class="active treeview">
                        <a href="{{URL::route('student-view')}}">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-group"></i>
                            <span>My Courses</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> View Grades</a></li>
                            <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Enrollments</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="{{URL::route('student-profile')}}">
                            <i class="fa fa-dashboard"></i> <span>My Profile</span>
                        </a>
                    </li>

                    @endif

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('heading')

            </h1>

        </section>

        <!-- Main content -->
        <section class="content">


                    @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2016<a href="">ITMax Portal</a>.</strong> All rights reserved.
    </footer>
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->


<!-- jQuery 2.1.4 -->
<script src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset('plugins/fastclick/fastclick.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>


@yield('scripts')


</body>
</html>
