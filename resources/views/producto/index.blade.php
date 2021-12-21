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

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">imagen</th>
                <th scope="col">nombreproducto</th>
                <th scope="col">precio</th>
                <th scope="col">marca</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <th scope="row">{{ $producto->id }}</th>
                    <td>{{ $producto->imagen }}</td>
                    <td>{{ $producto->nombreproducto }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->marca }}</td>

                    <td>
                        <a href="{{ route('producto.edit', $producto) }}">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('producto.destroy', $producto) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </td>
                <td>
                  <button type="submit" class="btn btn-danger"> <a href="#">Comprar</a> </button> 
                </td>

                </tr>
            @endforeach
        </tbody>
    </table>



@endsection
