<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assessment | </title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/css/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!-- Font Awesome -->
    <link href="{{ asset('assets/css/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/css/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
   <link href="{{ asset('assets/css/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="{{ asset('assets/css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
<!-- JQVMap -->
<link href="{{ asset('assets/css/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="{{ asset('assets/css/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/build/css/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{route('landing')}}" class="site_title"> <span>Go To Home</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              {{-- <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div> --}}
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li class="@if(str_contains(Request::url(), 'home') || str_contains(Request::url(), 'create/task') || str_contains(Request::url(), 'edit/task')) active @endif">
                    <a href="{{route('home')}}"><i class="fa fa-tasks"></i> Task Managment </a>
                  
                  </li>
                  <li class="@if(str_contains(Request::url(), 'user')) active @endif"><a href="{{route('all.user')}}"><i class="fa fa-users"></i> User Managment </a>
                   
                  </li>
                  </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>
        <div class="page-title">
            <div class="title_left">
              <h3>Tables <small></small></h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                <div class="input-group">
                    <a class="" href="{{ route('logout') }}" style="color: white;"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                  <span class="input-group-btn">
                    {{-- <button class="btn btn-default" type="button">LogOut</button> --}}
                    
                  </span>
                </div>
              </div>
            </div>
          </div>
        {{-- <main class="py-4"> --}}
            @yield('content')
        {{-- </main> --}}
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('assets/css/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/css/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/css/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{ asset('assets/css/vendors/nprogress/nprogress.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('assets/css/vendors/iCheck/icheck.min.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('assets/css/build/js/custom.min.js')}}"></script>
@stack('scripts')
</body>
</html>
