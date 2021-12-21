<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = usuarios::simplePaginate(2);
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new usuarios;
        $usuario->nombre = $request ->nombre;
        $usuario->email = $request ->email;
        $usuario->direccion = $request ->direccion;
        $usuario->edad = $request ->edad;
        $usuario->cedula = $request ->cedula;
        $usuario->save();
        return redirect()->route('usuarios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(usuarios $usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(usuarios $usuario)
    {
        return view('usuarios.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, usuarios $usuario)
    {
        
        $usuario->nombre = $request ->nombre;
        $usuario->email = $request ->email;
        $usuario->direccion = $request ->direccion;
        $usuario->edad = $request ->edad;
        $usuario->cedula = $request ->cedula;
        $usuario->save();
    
        return redirect()->route('usuarios.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuarios  $usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(usuarios $usuario)
    {
        $usuario->DELETE();
        return redirect()->route('usuarios.index');
    }
}
