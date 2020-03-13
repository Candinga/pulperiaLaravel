@extends('layouts.app1')

@section('title', 'Cierre de Caja')

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
              <li class="breadcrumb-item active">Agregar Cierre de Caja</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <!-- /.content-header -->

  <div class="container" >
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="/cierreCaja">
           @csrf 
          <div class="container" >
          
            <div class="bordes" style="background-color: rgba(255,255,255,0.3);">
              <div class="animated fadeInRight">
              <center><h3><strong>AGREGAR CIERRE DE CAJA</strong></h3></center>
              <hr>
              <div class="row">
                <div class="col-md-4">
                  <h5>Monto Inicial:</h5>
                  <div class="input-group">
                    
                    <input type="number" required class="form-control" placeholder="Ingrese el monto inicial" id="txtMontoInicial" name="txtMontoInicial" autocomplete="false"><br/>
                  </div>
                </div>
                <div class="col-md-4">
                  <h5>Monto Final:</h5>
                  <div class="input-group">
                    
                    <input class="form-control" required id="txtMontoFinal" placeholder="Ingrese el monto final" type="number" name="txtMontoFinal" autocomplete="off">
                  </div>
                </div>
                <div class="col-md-12">
                <br> <h5>Observaciones del dia:</h5>
                 <div class="input-group">
                    
                    <input type="text" required class="form-control"  placeholder="Ingrese las observaciones" id="txtObservaciones" name="txtObservaciones" autocomplete="off">
                  </div>
                  </div>
                          <div class="col-md-12">
                <br><br><strong><center><button class="btn btn-primary" onclick=" return confirmacionAgg()" id="btnGuardar" /> ALMACENAR CIERE DE CAJA</button></strong></center>
                <br>
              </div> 
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection 
