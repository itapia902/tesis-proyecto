<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        return view('Usuario/ingresarUsuario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Para presentar todos los usuarios en la pantalla
    {
        $usuario=Usuario::all();
        return view('Usuario/verUser', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //Para guardar los usuarios en la base de datos
    {
        $usuario = new Usuario(); 
        $tipo="Usuario";
        $usuario->usuario_Nombre=$request->usuarioNombre;
        $usuario->usuario_Apellido=$request->usuarioApellido;
        $usuario->usuario_Telefono=$request->usuarioTelefono;
        $usuario->usuario_Direccion=$request->usuarioDireccion;
        $usuario->usuario_Email=$request->usuarioCorreo;
        $usuario->usuario_Contrasena=$request->usuarioContrasena;
        $usuario->usuario_Tipo=$tipo;

        $usuario->save();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
