@extends('layouts.app1')

@section('title', 'Usuarios')

@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pulpería Monte de Sion</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Agregar Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">

        <form class="form-group" method="POST" action="/usuarios">
          @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>AGREGAR USUARIOS</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Usuario:</h5>
                  <div class="input-group">
                    
                    <input class="form-control" required id="txtNombre" placeholder="Ingrese el nombre del usuario" type="text" name="txtNombre" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Contraseña:</h5>
                 <div class="input-group">
                    
                    <input type="password" required class="form-control"  placeholder="Ingrese la contraseña" id="txtPassword" name="txtPassword" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick="confirmacionAgg()" id="btnGuardar" /> ALMACENAR USUARIO</button></strong></center>
                <br>
              </div>  
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection