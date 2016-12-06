<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>SHTS | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css rel="stylesheet" ">
    <!-- Theme style -->
    <link href="/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('/users')}}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SH</b>TS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SHTS</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="/img/default.png" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{ (Auth::check() ? Auth::user()->username : 'Username') }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="/img/default.png" class="img-circle" alt="User Image" />
                    <p>
                      {{ (Auth::check() ? Auth::user()->username : 'Username') }} - {{ (Auth::check() ? Auth::user()->type : 'Type') }}
                      <small>Member since {{ (Auth::check() ? Auth::user()->created_at : '') }}</small>
                    </p>
                  </li>                  
                  <!-- Menu Footer-->
                  <li class="user-footer">                    
                    <div class="pull-left">
                      <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->             
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/img/default.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>{{ (Auth::check() ? Auth::user()->username : 'Username') }}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>        

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">FEATURES</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="{{ url('/users') }}"><i class='fa fa-users'></i> <span>Users</span></a></li>
            <li class=""><a href="{{ url('/fibonacci') }}"><i class='fa fa-calculator'></i> <span>Fibonacci</span></a></li>
            <li class=""><a href="{{ url('/palindrome') }}"><i class='fa fa-backward'></i> <span>Palindrome</span></a></li>
            <li class=""><a href="{{ url('/anagram') }}"><i class='fa fa-random'></i> <span>Anagram</span></a></li>
            <li class=""><a href="{{ url('/number-sort') }}"><i class='fa fa-sort'></i> <span>Number Sort</span></a></li>           
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            @yield('header')
            <small>@yield('description')</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">@yield('page')</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          @yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Powered By: <a href="https://github.com/charlesm31" target="_blank">devJc</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">SHTS University</a>.</strong> All rights reserved.
      </footer>
      
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Datatables CDN -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   
    <!-- AdminLTE App -->
    <script src="/js/admin.min.js" type="text/javascript"></script>


    @yield('script')

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>