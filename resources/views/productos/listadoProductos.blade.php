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
              <li class="breadcrumb-item active">Listado de Productos</li>
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
                  <th>Código</th>
                  <th>Descripción</th>
                  <th>Cantidad</th>
                  <th>Precio Unidad (LPS)</th>
                  <th>Costo Unidad (LPS)</th>
                  <th>Precio Mayorista (LPS)</th>
                  <th>Costo Mayorista (LPS)</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($producto as $n )
                  <tr>
                    <td>{{ $n->codigo}}</td>
                    <td>{{ $n->descripcion}}</td>
                    <td>{{ $n->cantidad}}</td>
                    <td>L. {{ $n->precioUnidad}}</td>
                    <td>L. {{ $n->costoUnidad}}</td>
                    <td>L. {{ $n->precioMayorista}}</td>
                    <td>L. {{ $n->costoMayorista}}</td>
                    <td>
                      <a href="{{ route('productos.edit', $n->id) }}" class="btn btn-outline-success"><img title="Editar producto" src="/imagenes/editar.png" height="11" width="11"></a>
                      
                      <a href="{{ route('productos.destroy', $n->id) }}" onclick="confirmDelete()" class="btn btn-outline-danger"><img title="Eliminar producto" src="/imagenes/x.png" height="11" width="11" alt=""></a>
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