<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Monte de Sion | @yield('title')</title>
  <link rel="icon" type="image/png" href="/imagenes/logoPulperia.png"/>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="/css/alertify.min.css">

  <link rel="stylesheet" type="text/css" href="/css/themes/semantic.min.css">


  <script src="/js/jquery-3.2.1.min.js"></script>
  <script src="/js/alertify.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
       
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
      
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home')}}" class="brand-link">
      <img src="/imagenes/logoPulperia.png" alt="Logo" class="brand-image img-circle elevation-5"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Monte de Sion</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/imagenes/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ Auth::user()->name }} <span class="caret"></span></a>
        </div>
      </div>

       <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Productos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/productos/create')}}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Agregar un nuevo producto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/productos/')}}" class="nav-link">
                  <i class="fa fa-th-list nav-icon"></i>
                  <p>Listado de productos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Proveedores
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/proveedores/create')}}" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Agregar un nuevo proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/proveedores/')}}" class="nav-link">
                  <i class="fa fa-th-list nav-icon"></i>
                  <p>Listado de proveedores</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Compras
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/compras/create')}}" class="nav-link">
                  <i class="fa fa-cart-plus nav-icon"></i>
                  <p>Agregar una nueva compra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/compras/')}}" class="nav-link">
                  <i class="fa fa-th-list nav-icon"></i>
                  <p>Listado de compras</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-hdd"></i>
              <p>
                Ventas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/ventas/create')}}" class="nav-link">
                  <i class="fa fa-money-bill-alt nav-icon"></i>
                  <p>Agregar una nueva venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/ventas/')}}" class="nav-link">
                  <i class="fa fa-th-list nav-icon"></i>
                  <p>Listado de ventas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                  <i class="fafa-reply-all nav-icon"></i>
              <i class="nav-icon fa fa-reply-all"></i>
              <p>
                Devouciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/devoluciones/create')}}" class="nav-link">
                  <i class="fa fa-undo-alt nav-icon"></i>
                  <p>Agregar una nueva devolución</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/devoluciones/')}}" class="nav-link">
                  <i class="fa fa-th-list nav-icon"></i>
                  <p>Listado de devoluciones</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Credito
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-male nav-icon"></i>
                  <p>Credito Cliente</p>
                   <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/creditoCliente/create')}}" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Agregar credito a cliente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/creditoCliente/')}}" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>listado cuentas por cobrar</p>
                </a>
              </li>
            </ul>
              </li>
              <li class="nav-item">
                <a href="/pages/UI/icons.html" class="nav-link">
                  <i class="fa fa-user-circle nav-icon"></i>
                  <p>Credito Proveedor</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/creditoProveedor/create')}}" class="nav-link">
                  <i class="fa fa-user-plus nav-icon"></i>
                  <p>Agregar credito de proveedor</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/creditoProveedor/')}}" class="nav-link">
                  <i class="fa fa-list nav-icon"></i>
                  <p>listado de cuentas a pagar</p>
                </a>
              </li>
            </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Cierre de Caja
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/cierreCaja/create')}}" class="nav-link">
                  <i class="fa fa-cart-plus nav-icon"></i>
                  <p>Agregar cierre de caja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/cierreCaja/')}}" class="nav-link">
                  <i class="fa fa-list-ol nav-icon"></i>
                  <p>Listado de cierres</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/usuarios/create')}}" class="nav-link">
                  <i class="far fa-address-card nav-icon"></i>
                  <p>Agregar usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/usuarios/')}}" class="nav-link">
                  <i class="far fa-list-alt nav-icon"></i>
                  <p>listado de usuarios</p>
                </a>
              </li>
             
            </ul>
          </li>
        </div>

    <!-- /.sidebar -->
  </aside>

<div>
 
  @yield('content')
</div>

  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="#">R&E</a>.</strong>
    Todos los derechos reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/plugins/datatables/jquery.dataTables.js"></script>
<script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>

<script src="/js/jquery-3.2.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- page script -->


<script>
  $(function () {
    $("#example1").DataTable({
      language: {
    "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad"
                }
}
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script type="text/javascript">
  function confirmacionAgg()
  {
    alertify.success('¡Agregado Exitosamente!');
  }
</script>

<script type="text/javascript">
  function Actualizar()
  {
    alertify.success('Actualizado Exitosamente!');
  }
</script>

<script type="text/javascript">
  function confirmDelete()
  {
   alertify.error('Eliminado Exitosamente!');
  }
</script>
</html>