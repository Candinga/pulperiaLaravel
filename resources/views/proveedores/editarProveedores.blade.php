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
              <li class="breadcrumb-item active">Editar Proveedor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/proveedores/{{$proveedor->id}}">
          @method('PUT')
           @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>EDITAR PROVEEDOR</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Identidad:</h5>
                  <div class="input-group">
                    
                    <input type="text" required class="form-control" placeholder="Ingrese la Identidad del Proveedor" id="txtId" value="{{$proveedor->identidad}}" name="txtId" autocomplete="false" maxlength="13"><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Nombre:</h5>
                  <div class="input-group">
                    
                    <input class="form-control" required id="txtNombre" placeholder="Ingrese el nombre completo" type="text" value="{{$proveedor->nombreProveedor}}" name="txtNombre" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Teléfono:</h5>
                  <div class="input-group">
                    
                    <input type="text" required class="form-control"  placeholder="Ingrese el numero telefónico" id="txtTelefono" value="{{$proveedor->telefono}}" name="txtTelefono" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return Actualizar()" id="btnGuardar" /> MODIFICAR PROVEEDOR</button></strong></center>
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