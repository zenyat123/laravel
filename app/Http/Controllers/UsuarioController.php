<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $buscar_por = $request->get("buscarpor");

        $buscador = $request->get("buscador");

        //  Ejecuta la función scope de criterio de busquedas

        $usuario = Usuario::buscador($buscar_por, $buscador)->paginate(6);
        
        return view("usuario.index", compact("usuario"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view("usuario.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario = new Usuario;

        $usuario->id_usuario = $request->id_usuario;
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->departamento = $request->departamento;
        $usuario->cargo = $request->cargo;
        $usuario->salario = $request->salario;
        $usuario->email = $request->email;

        $usuario->save();

        return redirect()->route("usuarios.index")->with("respuesta", "Usuario(a) Registrado(a)");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $usuario = Usuario::find($id);

        return view("usuario.show", compact("usuario"));

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
        
        return view("usuario.edit", compact("usuario"));

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
        
        $usuario = Usuario::find($id);

        $usuario->id_usuario = $request->id_usuario;
        $usuario->nombres = $request->nombres;
        $usuario->apellidos = $request->apellidos;
        $usuario->direccion = $request->direccion;
        $usuario->telefono = $request->telefono;
        $usuario->celular = $request->celular;
        $usuario->departamento = $request->departamento;
        $usuario->cargo = $request->cargo;
        $usuario->salario = $request->salario;
        $usuario->email = $request->email;

        $usuario->save();

        return redirect()->route("usuarios.index")->with("respuesta", "Usuario(a) Actualizado(a)");

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

        $usuario->delete();

        return redirect()->route("usuarios.index")->with("respuesta", "Registro eliminado");

    }

    /*======  Función para confirmar el usuario seleccionado  ======*/


    public function confirm($id)
    {

        $usuario = Usuario::find($id);

        return view("usuario.confirm", compact("usuario"));

    }

}