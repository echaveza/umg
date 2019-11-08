<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DAS | www.informaticasbv.com</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/sweet-alert.css')}}">
    <link rel="stylesheet" href="{{asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <!-- Muestra el datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="\js\jquery-1.12.4.js"></script>
		<script src="\js\jquery-ui.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $('.date').datepicker();
        });
    </script>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>DA</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Sys Fletter</b></span>
        </a>

        <!--BARRA DE NAVEGACION-->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
            <figure>
              <img src="{{asset('img/logo.png')}}"class="img-responsive center-box" style="width:30%;">
            </figure>
          </div>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Administrador</span>
                </a>
              </li>
            </ul>
          </div>
        </nav>

      </header>






      <!-- Left side column. contains the logo and sidebar -->

      <aside class="main-sidebar">
        <section class="sidebar">

          <ul class="sidebar-menu">
            <li class="header"></li>

            <li class="treeview">
              <a href="#">
                <div class="dropdown-menu-button"><i class="zmdi zmdi-case zmdi-hc-fw"></i>&nbsp;&nbsp; Administración <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/combustible/compra')}}"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>&nbsp;&nbsp; Compra</a></li>
                <li><a href="{{url('/combustible/proveedor')}}"><i class="zmdi zmdi-truck zmdi-hc-fw"></i>&nbsp;&nbsp; Ofertadores</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <div class="dropdown-menu-button"><i class="zmdi zmdi-account-add zmdi-hc-fw"></i>&nbsp;&nbsp; Colaboradores <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/combustible/colaboradores')}}"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Agregar Colaborador</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <div class="dropdown-menu-button"><i class="zmdi zmdi-alarm zmdi-hc-fw"></i>&nbsp;&nbsp; Solicitudes de Vehículos <i class="zmdi zmdi-chevron-down pull-right zmdi-hc-fw"></i></div>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/combustible/vehiculo')}}"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i>&nbsp;&nbsp; Vehículos</a></li>
                <li><a href="ventas/venta"><i class="zmdi zmdi-timer zmdi-hc-fw"></i>&nbsp;&nbsp; Solicitudes <span class="label label-danger pull-right label-mhover">7</span></a>
                <li><a href="ventas/venta"><i class="zmdi zmdi-time-restore zmdi-hc-fw"></i>&nbsp;&nbsp; Aprobaciones pendientes <span class="label label-danger pull-right label-mhover">7</span></a>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="zmdi zmdi-trending-up zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes y estadísticas</a></li>
              </a>

            </li>

            <li>
              <a href="#">
                <i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Configuraciones avanzadas</a></li>
              </a>
            </li>

          </ul>
        </section>

      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
		        <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="title"></h3>
                  <h3 class="box-title">Dirección de Área de Salud Baja Verapaz</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-0">
                        <!--Contenido-->
           @yield('contenido')

           <!--Fin Contenido-->
        </div>
     </div>
	 </div>
	 </div><!-- /.row -->
	 </div><!-- /.box-body -->
	 </div><!-- /.box -->
	 </div><!-- /.col -->
	 </div><!-- /.row -->
	 </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fin-Contenido-->
<footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Sistema de Administración y Gestión de Combustible
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Edy Chávez <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
                  </footer>
<!-- jQuery 2.1.4 -->
<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
@stack('scripts')
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}"></script>

</body>
</html>
