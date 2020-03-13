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
              <li class="breadcrumb-item active">Listado de Proveedores</li>
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
                  <th>Identidad</th>
                  <th>Nombre Completo | Empresa</th>
                  <th>Teléfono</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($proveedor as $n )
                  <tr>
                    <td>{{ $n->identidad}}</td>
                    <td>{{ $n->nombreProveedor}}</td>
                    <td>{{ $n->telefono}}</td>
                    <td>
                      <a href="{{ route('proveedores.edit', $n->id) }}" class="btn btn-outline-success"><img title="Editar producto" src="/imagenes/editar.png" height="20" width="20"></a>
                      
                      <a href="{{ route('proveedores.destroy', $n->id) }}" onclick="confirmDelete()" class="btn btn-outline-danger"><img title="Eliminar producto" src="/imagenes/x.png" height="20" width="20" alt=""></a>
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