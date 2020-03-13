@extends('layouts.app1')

@section('title', 'Proveedores')

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
              <li class="breadcrumb-item active">Agregar Proveedor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/proveedores">
           @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>AGREGAR PROVEEDOR</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Identidad:</h5>
                  <div class="input-group">
                    
                    <input type="text" required class="form-control" placeholder="Ingrese la Identidad del Proveedor" id="txtId" name="txtId" autocomplete="false" maxlength="13"><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Nombre:</h5>
                  <div class="input-group">
                    
                    <input class="form-control" required id="txtNombre" placeholder="Ingrese el nombre completo" type="text" name="txtNombre" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Teléfono:</h5>
                  <div class="input-group">
                    
                    <input type="text" required class="form-control"  placeholder="Ingrese el numero telefónico" id="txtTelefono" name="txtTelefono" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return confirmacionAgg()" id="btnGuardar" /> ALMACENAR PROVEEDOR</button></strong></center>
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