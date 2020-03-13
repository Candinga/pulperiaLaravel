<?php

namespace Pulperia\Http\Controllers;

use Pulperia\CierreCaja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class cierreCajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cierreCaja = CierreCaja::all();
        return view('cierreCaja.listadoCierreCaja')->with(['cierreCaja' =>$cierreCaja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('cierreCaja.agregarCierreCaja');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cierre = new CierreCaja();
        $cierre->dineroInicio = $request->input('txtMontoInicial');
        $cierre->dineroFinal = $request->input('txtMontoFinal');
        $cierre->observaciones = $request->input('txtObservaciones'); 
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
        $cierreCaja = CierreCaja::find($id);
        return view('cierreCaja.editarCierreCaja')->with(['cierreCaja' =>$cierreCaja]);
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
        $id = CierreCaja::find($id);
        $id->dineroInicio = $request->txtMontoInicial;
        $id->dineroFinal = $request->txtMontoFinal;
        $id->observaciones = $request->txtObservaciones;
        $id->save();

        return redirect('cierreCaja/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cierreCaja = CierreCaja::find($id);
        $cierreCaja -> delete();

        return back();
    }
}
