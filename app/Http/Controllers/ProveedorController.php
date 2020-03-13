<?php

namespace Pulperia\Http\Controllers;

use Pulperia\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedor = Proveedor::all();
        return view('proveedores.listadoProveedores')->with(['proveedor' =>$proveedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.agregarProveedores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Proveedor();
        $producto->identidad = $request->input('txtId');
        $producto->nombreProveedor = $request->input('txtNombre');
        $producto->telefono = $request->input('txtTelefono');
        $producto->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);
        return view('proveedores.editarProveedores')->with(['proveedor' =>$proveedor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = Proveedor::find($id);
        $id->identidad = $request->txtId;
        $id->nombreProveedor = $request->txtNombre;
        $id->telefono = $request->txtTelefono;
        $id->save();

        return redirect('proveedores/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor -> delete();

        return back();
    }
}
