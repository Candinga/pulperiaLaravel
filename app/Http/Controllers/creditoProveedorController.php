<?php

namespace Pulperia\Http\Controllers;

use Pulperia\CreditoProveedor;
use Pulperia\Proveedor;
use Illuminate\Http\Request;
use DB;

class creditoProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creditoProveedor=DB::table('credito_proveedors')
        ->join('proveedors','proveedors.identidad','=', 'credito_proveedors.idProveedor')
        ->select('credito_proveedors.id' ,'proveedors.NombreProveedor', 'credito_proveedors.totalDinero')
        ->get();

        return view('creditoProveedor.listadoCreditoProveedor')->with(['creditoProveedor' =>$creditoProveedor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        return view('creditoProveedor.agregarCreditoProveedor',compact('proveedores'));     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cierre = new CreditoProveedor();
        $cierre->idProveedor = $request->input('txtProveedor');
        $cierre->totalDinero = $request->input('txtMonto');
        $cierre->save();

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
        //
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
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $credito = CreditoProveedor::find($id);
        $credito -> delete();

        return back();
    }
}
