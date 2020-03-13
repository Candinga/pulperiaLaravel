@extends('layouts.app1')

@section('title', 'Devoluciones')

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
              <li class="breadcrumb-item active">Agregar Devoluciones</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/devoluciones">
           @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>AGREGAR DEVOLUCIONES</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Código:</h5>
                  <div class="input-group">
                    
                    <input type="text" required class="form-control" placeholder="Ingrese el Código del Produto" id="txtCodigo" name="txtCodigo" autocomplete="false" maxlength="9"><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Fecha:</h5>
                  <div class="input-group">
                    
                    <input type="date" required class="form-control"  placeholder="Ingrese la fecha" id="txtFecha" name="txtFecha" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Cantidad:</h5>
                 <div class="input-group">
                    
                    <input type="number" required class="form-control"  placeholder="Ingrese la cantidad" id="txtCantidad" name="txtCantidad" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">
                  <h5>Observación:</h5>
                 <div class="input-group">
                    
                    <input type="text" required class="form-control"  placeholder="Ingrese las observaciones" id="txtObservacion" name="txtObservacion" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return confirmacionAgg()" id="btnGuardar" /> ALMACENAR DEVOLUCION</button></strong></center>
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