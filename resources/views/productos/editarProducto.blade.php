@extends('layouts.app1')

@section('title', 'Productos')
 
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
              <li class="breadcrumb-item active">Editar Producto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/productos/{{$producto->id}}">
          @method('PUT')
           @csrf
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>EDITAR PRODUCTOS</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <h5>Código:</h5>
                  <div class="input-group">
                    
                    <input type="text" value="{{$producto->codigo}}" required class="form-control" placeholder="Ingrese el Código" id="txtCodigo" name="txtCodigo" autocomplete="false" maxlength="9"><br/>
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Descripción:</h5>
                  <div class="input-group">
                    
                    <input class="form-control" required id="txtDescripcion" placeholder="Ingrese la Descripción" type="text" value="{{$producto->descripcion}}" name="txtDescripcion" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Cantidad:</h5>
                  <div class="input-group">
                    
                    <input type="number" required class="form-control"  placeholder="Ingrese la Cantidad" id="txtCantidad" value="{{$producto->cantidad}}" name="txtCantidad" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-6">
                  <h5>Precio Unitario:</h5>
                 <div class="input-group">
                    
                    <input type="number" required class="form-control"  placeholder="Ingrese el Precio Unitario" id="txtPrecioUnit" value="{{$producto->precioUnidad}}" name="txtPrecioUnit" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">
                  <h5>Costo Unitario:</h5>
                 <div class="input-group">
                    
                    <input required class="form-control"  placeholder="Ingrese el Costo Unitario" id="txtCostoUnit" value="{{$producto->costoUnidad}}" name="txtCostoUnit" autocomplete="off">
                  </div>
                </div>

                <div class="col-md-6">

                  <h5>Precio Mayorista:</h5>
                  <div class="input-group">
                  
                    <input type="number" class="form-control"  placeholder="Ingrese el precio mayorista" id="txtPrecioMayorista" value="{{$producto->precioMayorista}}" name="txtPrecioMayorista" autocomplete="off">
                  </div>
                </div>
                 <div class="col-md-6">

                  <h5>Costo Mayorista:</h5>
                  <div class="input-group">
                  
                    <input type="number" class="form-control"  placeholder="Ingrese la costo mayorista" id="txtCostoMayorista" value="{{$producto->costoMayorista}}" name="txtCostoMayorista" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return Actualizar()" id="btnGuardar" /> ACTUALIZAR PRODUCTO</button></strong></center>
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