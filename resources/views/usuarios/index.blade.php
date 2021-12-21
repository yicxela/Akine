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
                <th scope="col">nombre</th>
                <th scope="col">email</th>
                <th scope="col">direccion</th>
                <th scope="col">edad</th>
                <th scope="col">cedula</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <th scope="row">{{ $usuario->id }}</th>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->direccion }}</td>
                    <td>{{ $usuario->edad }}</td>
                    <td>{{ $usuario->cedula }}</td>
                    <td>
                        <a href="{{ route('usuarios.edit', $usuario) }}">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('usuarios.destroy', $usuario) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $usuarios->links() }}


@endsection
