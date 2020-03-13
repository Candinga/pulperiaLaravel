@extends('layouts.app1')

@section('title', 'Crédito Cliente')

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
              <li class="breadcrumb-item active">Agregar crédito a cliente</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/creditoCliente">
           @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>AGREGAR CRÉDITO A CLIENTE</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Nombre del Cliente:</h5>
                  <div class="input-group">
                    
                    <input type="text" required class="form-control" placeholder="Ingrese el nombre completo" id="txtNombre" name="txtNombre" autocomplete="false" ><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Fecha:</h5>
                  <div class="input-group">
                    
                    <input class="form-control" required id="txtFecha" placeholder="Ingrese la fecha" type="date" name="txtFecha" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Monto:</h5>
                  <div class="input-group">
                    
                    <input type="number" required class="form-control"  placeholder="Ingrese la Cantidad" id="txtMonto" name="txtMonto" autocomplete="off">
                  </div>
                </div>
                
                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return confirmacionAgg()" id="btnGuardar" /> ALMACENAR CREDITO</button></strong></center>
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