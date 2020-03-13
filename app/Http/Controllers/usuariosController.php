<?php

namespace Pulperia\Http\Controllers;
 
use Pulperia\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class usuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $usuarios = Usuario::all();
        return view('Usuarios.listadoUsuarios')->with(['usuarios' =>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios.agregarUsuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombreUsuario = $request->input('txtNombre');
        $usuario->contrasena = $request->input('txtPassword');   
        $usuario->save();

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
        $usuario = Usuario::find($id);
        return view('Usuarios.editarUsuario')->with(['usuario' =>$usuario]);
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
        $id = Usuario::find($id);
        $id->nombreUsuario = $request->txtNombre;
        $id->contrasena = $request->txtPassword;
        $id->save();

        return redirect('usuarios/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario -> delete();

        return back();
    }
}
