<?php

namespace Pulperia\Http\Controllers;

use Pulperia\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('productos.listadoProductos')->with(['producto' =>$producto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.agregarPro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->codigo = $request->input('txtCodigo');
        $producto->descripcion = $request->input('txtDescripcion');
        $producto->cantidad = $request->input('txtCantidad');
        $producto->precioUnidad = $request->input('txtPrecioUnit');
        $producto->costoUnidad = $request->input('txtCostoUnit');
        $producto->precioMayorista = $request->input('txtPrecioMayorista');
        $producto->costoMayorista = $request->input('txtCostoMayorista');   
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
        $producto = Producto::find($id);
        return view('Productos.editarProducto')->with(['producto' =>$producto]);
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
        $id = Producto::find($id);
        $id->codigo = $request->txtCodigo;
        $id->descripcion = $request->txtDescripcion;
        $id->cantidad = $request->txtCantidad;
        $id->precioUnidad = $request->txtPrecioUnit;
        $id->costoUnidad = $request->txtCostoUnit;
        $id->precioMayorista = $request->txtPrecioMayorista;
        $id->costoMayorista = $request->txtCostoMayorista;
        
        $id->save();

        return redirect('productos/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto -> delete();

        return back();
    }
}
