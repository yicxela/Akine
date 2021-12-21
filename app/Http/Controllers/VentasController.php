<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use App\Models\productos;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = ventas::all();
        return view('ventas.index',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $productos = productos::all();
        return view ('venta.create',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ventas = new ventas;
        $ventas->cantidad = $request ->cantidad;
        $ventas->fecha = $request ->fecha;
        $ventas->formapago = $request ->formapago;
        $ventas->limitentrega = $request ->limitentrega;
    
        $venta->save();
        return redirect()->route('venta.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit(ventas $ventas)
    {
        return view('ventas.edit',compact('ventas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ventas $ventas)
    {
      
        $ventas->cantidad = $request ->cantidad;
        $ventas->fecha = $request ->fecha;
        $ventas->formapago = $request ->formapago;
        $ventas->limitentrega = $request ->limitentrega;
        $ventas->save();
        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy(ventas $ventas)
    {
        $venta->DELETE();
        return redirect()->route('ventas.index');
    }
}
