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
    <h2>Editar registro de usuarios{{ $usuario->id }}</h2>
    <form action="{{ route('usuarios.update', $usuario) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label>Nombres completos...</label>
            <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2" value="{{ $usuario->nombre }}">
            <label>email...</label>
            <input type="email" name="email" placeholder="email" class="form-control mb-2" value="{{ $usuario->email }}">
            <label>direccion..</label>
            <input type="text" name="direccion" placeholder="direccion" class="form-control mb-2"
                value="{{ $usuario->direccion }}">
            <label>edad..</label>
            <input type="number" name="edad" placeholder="edad" class="form-control mb-2" value="{{ $usuario->edad }}">
            <label>cedula..</label>
            <input type="number" name="cedula" placeholder="cedula" class="form-control mb-2"
                value="{{ $usuario->cedula }}">



        </div>

        <button type="submit" class="btn btn-danger">Enviar</button>
    </form>
@endsection
