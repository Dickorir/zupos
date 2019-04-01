<!DOCTYPE html>
<html>
@include('layout.header')
{{--<link rel="stylesheet" href="{{asset('build/css/pos.css')}}">--}}
<link rel="stylesheet" href="{{asset('build/css/custom-multi.css')}}">
<link rel="stylesheet" href="{{asset('build/css/responsive.css')}}">

<!-- PNotify -->
<link href="{{asset('vendors/pnotify/dist/pnotify.css')}}" rel="stylesheet" type="text/css" media="all" >
<link href="{{asset('vendors/pnotify/dist/pnotify.buttons.css')}}" rel="stylesheet" type="text/css" media="all" >
<link href="{{asset('vendors/pnotify/dist/pnotify.nonblock.css')}}" rel="stylesheet" type="text/css" media="all" >
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav pos">
<div class="wrapper">

    <header class="main-header">
        <nav class="navbar navbar-static-top" style="background-color: #00afee !important;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="{{url('/')}}" class="logo" style="margin-left: -15px !important;background-color: #00afee !important;">
                        <!-- mini logo for sidebar mini 50x50 pixels -->
                        <span class="logo-mini"><b>P</b>OS</span>
                        <!-- logo for regular state and mobile devices -->
                        <span class="logo-lg"><b>Zuca</b>POS</span>
                    </a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown message-menu pull-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                date_default_timezone_set('Africa/Nairobi');
                                echo '';
                                ?>
                                {{  date("d D M Y").' - ' }}
                                <span class="clockstyle" id="clockDisplay"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li><!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <!-- Menu toggle button -->

                            <a class="dropdown-item btn btn-flat" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Sign out') }}
                            </a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @else

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs">{{ Auth::user()->name }}</span><span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <!-- Menu Body -->
                                    <li class="user-body" style="background-color: #00afee !important;">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer" style="background-color: #00afee !important;">
                                        <div class="pull-left">
                                            <a href="{{ url('/profile') }}" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a class="dropdown-item btn btn-default btn-flat" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Sign out') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                    </ul>
                </div>
                <!-- /.navbar-custom-menu -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </header>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Content Header (Page header) -->
        @yield('content')

        <!-- /.content -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
    <!-- <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018-2020 <a href="https://zuca.co.ke">Zuca Solutions</a>.</strong> All rights
        reserved.
    </footer> -->

</div>
<!-- ./wrapper -->
@include('layout.pagejs')

</body>
</html>
