<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Annuaire - @yield('title') </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href=" {{asset('assets/css/base/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href=" {{asset('assets/css/base/css/OverlayScrollbars.min.css')}} ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" {{asset('assets/css/base/css/adminlte.min.css')}} ">
  <link rel="stylesheet" href="/assets/webfonts">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('index')}}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('logout')}}" class="nav-link">Deconnexion</a>
      </li>
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/images/logo.png')}}" alt="GestPlant" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Annuaire</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tableau de board</p>
                </a>
              </li>  
            </ul>
          </li>
          <li class="nav-header">Menu</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Catégorie de plats</p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Plats</p>
            </a>
          </li>
          
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield("main")
  
  @yield('add-feature')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Annuaire by KOMBATE Damelan </strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src=" {{asset('assets/css/base/js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src=" {{asset('assets/css/base/js/bootstrap.bundle.min.js')}} "></script>
<!-- overlayScrollbars -->
<script src=" {{asset('assets/css/base/js/jquery.overlayScrollbars.min.js')}} "></script>
<!-- AdminLTE App -->
<script src=" {{asset('assets/css/base/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src=" {{asset('assets/css/base/js/demo.js')}}"></script>
<script src=" {{asset('assets/css/base/js/jquery.validate.min.js')}}"></script>
<script src=" {{asset('assets/css/base/js/additional-methods.min.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<!-- ChartJS -->
<script src=" {{asset('assets/css/base/js/Chart.min.js')}}"></script>

<!-- PAGE SCRIPTS -->
<script src=" {{asset('assets/css/base/js/dashboard2.js')}} "></script>
</body>
</html>
