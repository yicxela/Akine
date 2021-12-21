<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Models\usuarios;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = productos::all();
        return view('producto.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = usuarios::all();
        return view ('producto.create',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new productos;
        $producto->imagen = $request ->imagen;
        $producto->nombreproducto = $request ->nombreproducto;
        $producto->precio = $request ->precio;
        $producto->marca = $request ->marca;
    
        $producto->save();
        return redirect()->route('producto.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit(productos $producto)
    {
        return view('producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productos $producto)
    {
        $producto->imagen = $request ->imagen;
        $producto->nombreproducto = $request ->nombreproducto;
        $producto->precio = $request ->precio;
        $producto->marca = $request ->marca;
        $producto->save();
        return redirect()->route('producto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy(productos $producto)
    {
        $producto->DELETE();
        return redirect()->route('producto.index');
    }
}

