<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GALLINAS PONEDORAS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #fcda33;">
    <!-- Left navbar links -->
    
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
      <div class="card-header">
        <h5 class style="card-title; font-weight: 900 ">PROGRAMA MUNICIPAL GALLINAS PONEDORAS</h5>      
      </div>
      
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-yellow elevation-4 ">
    
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/munilogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-dark">GALLINAS PONEDORAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/munilogo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @auth
          <a href="#" class="d-block"> {{ auth()->user()->name  }} </a>
            
        
          <form action="{{route('logout')}}" method="POST" class="mt-2"> 
            @csrf
            <button type="submit" class="btn btn-outline-secondary btn-sm"> Cerrar sesion </button>
          
          </form>
          @endauth
        </div>
      </div>

  
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                MODULOS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">


              {{-- //menu beneficiario --}}
             {{-- // @auth
              @if (auth()->user()->rol=='beneficiario' )
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ver mis aves</p>
                </a>
              </li>
              @endif--}}
              {{-- //si el usuario es admin y digitador --}}
             {{-- //@if (auth()->user()->rol=='admin')--}}
             <li class="nav-item">
              <a href="{{route('users')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuario</p>
              </a>
            </li>
             
              <li class="nav-item">
                <a href="{{route('vacuna')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lotes de Vacunas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('control')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Control de asistencia de vacunacion</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('person')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Persona</p>
                </a>
              </li>
              {{-- //si el usuario es admin y digitador --}}
              

              {{-- //solo administrador --}}
        
               
             <li class="nav-item">
                <a href="{{route('plancalendarios')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Planificacion de calendarios</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="{{route('comunidades')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comunidades</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('aves')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Aves</p>
                </a>
              </li>
            {{-- // @endif--}} 

              {{-- //@if (user()->rol=='digitador' )--}}
           
           {{-- // @endif --}}

              
                
             
           
              

              {{-- //solo administrador --}}

           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @yield('header')
          </div><!-- /.col -->
          <div class="col-sm-6">
          
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
        <!-- Info boxes -->
  
        <!-- /.row -->

        <!-- /.row -->

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Gallinas Ponedoras &copy; 2022 <a href="https://adminlte.io">Marlen Aracely Carbajal Pérez</a>.</strong>
   
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>