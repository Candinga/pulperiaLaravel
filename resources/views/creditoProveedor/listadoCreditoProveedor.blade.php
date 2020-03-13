@extends('layouts.app1')

@section('title', 'Credito Proveedor')

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
              <li class="breadcrumb-item active">Listado de Credito Proveedor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

          <div class="card">
           
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Proveedor</th>
                  <th>Monto (LPS)</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($creditoProveedor as $n )
                  <tr>
                    <td>{{ $n->id}}</td>
                    <td>{{ $n->NombreProveedor}}</td>
                    <td>L. {{ $n->totalDinero}}</td>
                    <td>
          
                      <a href="{{ route('creditoProveedor.destroy', $n->id) }}" onclick="confirmDelete()" class="btn btn-outline-danger"><img title="Eliminar credito Proveedor" src="/imagenes/x.png" height="20" width="20" alt=""></a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection