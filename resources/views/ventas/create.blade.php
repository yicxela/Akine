@extends('plantillaweb')

@section('home_web')
<link rel="stylesheet" type="text.css" href="style.css">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<div class="card">
  <div class="card-header">
    <h1>xiomii</h1>
  </div>
  <div class="card-body">
    <h5 class="card-title">Tienda de zapatos</h5>
    <p class="card-text">compra y divertete en la tienda ofrecemos zapatillas de calidad de tu preferencia.</p>
  
<button type="submit" class="btn btn-danger"> <a href="#">Usuario</a> </button>
<button type="submit" class="btn btn-danger"> <a href="#">Producto</a></button>
<button type="submit" class="btn btn-danger"> <a href="#">Ventas</a></button>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
           
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Quienes Somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contactos</a></li>
                    
                </ul>
            </div>
        </div>
  </div>
</div>
    <h2>Formulario de registro de ventas</h2>
    <form action="{{ route('venta.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>Nombre del producto...</label>
            <select name="id_productos" id="" class="form-control">
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombreproducto }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Cantidad:</label>
            <input type="number" class="form-control" name="cantidad" placeholder="Cantidad..">
            <label>Fecha</label>
            <input type="date" class="form-control" name="fecha" placeholder="Escribe la fecha ...">
            <label>Forma de pago:</label>
            <input type="text" class="form-control" name="formapago" placeholder="Escribe la forma de pago...">
            <label>Limite entrega:</label>
            <input type="date" class="form-control" name="limitentrega" placeholder="Escribe la fecha limite...">

        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

@endsection
