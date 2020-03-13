@extends('layouts.app1')

@section('title', 'Compras')

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
              <li class="breadcrumb-item active">Agregar Compra</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/compras">
           @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>AGREGAR COMPRA</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Producto:</h5>
                  <div class="input-group">
                   
                   <select name="txtCodigo" id="txtCodigo" class="form-control">
                    <option value="">--Seleccione un producto--</option>
                     @foreach ($productos as $producto)
                     <option value="{{ $producto['codigo'] }}">{{ $producto['descripcion']}}</option>

                     @endforeach
                   </select> 
                   
                  </div>
                </div>
                
                <div class="col-md-6">
                  <h5>Proveedor:</h5>
                  <div class="input-group">
                    
                    <select name="txtProveedor" id="txtProveedor" class="form-control">
                      <option value="">--Seleccione un proveedor--</option>
                     @foreach ($proveedores as $proveedor)
                     <option value="{{ $proveedor['identidad'] }}">{{ $proveedor['nombreProveedor']}}</option>

                     @endforeach
                   </select> 
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Cantidad:</h5>
                 <div class="input-group">
                    
                    <input type="number" required class="form-control"  placeholder="Ingrese la Cantidad" id="txtCantidad" name="txtCantidad" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">
                  <h5>Costo Unitario:</h5>
                 <div class="input-group">
                    
                    <input type="number" required class="form-control"  placeholder="Ingrese el Costo Unitario" id="txtCostoUnit" name="txtCostoUnit" autocomplete="off">
                  </div>
                </div>

                 <div class="col-md-6">

                  <h5>Costo Mayorista:</h5>
                  <div class="input-group">
                  
                    <input type="number" class="form-control"  placeholder="Ingrese la costo mayorista" id="txtCostoMayorista" name="txtCostoMayorista" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">

                  <h5>Observaciones:</h5>
                  <div class="input-group">
                  
                    <input type="text" class="form-control"  placeholder="Ingrese las observaciones" id="txtObservaciones" name="txtObservaciones" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return confirmacionAgg()" id="btnGuardar" /> ALMACENAR COMPRA</button></strong></center>
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
