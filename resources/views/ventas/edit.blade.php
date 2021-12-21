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
    <h2>Editar registro de ventas{{ $ventas->id }}</h2>
    <form action="{{ route('venta.update', $ventas) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Cantidad...</label>
            <input type="number" name="cantidad" placeholder="cantidad" class="form-control mb-2"
                value="{{ $ventas->cantidad }}">
            <label>Fecha...</label>
            <input type="date" name="fecha" placeholder="fecha" class="form-control mb-2" value="{{ $ventas->fecha }}">
            <label>Forma de pago..</label>
            <input type="text" name="formapago" placeholder="formapago" class="form-control mb-2"
                value="{{ $ventas->formapago }}">
            <label>Fecha limite de entrega..</label>
            <input type="date" name="limitentrega" placeholder="limitentrega" class="form-control mb-2"
                value="{{ $ventas->limitentrega }}">



        </div>

        <button type="submit" class="btn btn-danger">Enviar</button>
    </form>
@endsection
