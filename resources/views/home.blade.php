@extends('layouts.app')


<!-- resources/views/dashboard/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Agrega el enlace al CSS de Bootstrap (asegúrate de tener acceso a Internet para cargar los estilos) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-3">
        <h1>Dashboard</h1>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cake.index') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cake.index') }}">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cake.index') }}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cake.index') }}">Pedidos</a>
            </li>
            <!-- Agrega enlaces a otras tres tablas según sea necesario -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cake.index') }}">Otra Tabla</a>
            </li>
                <div class="card-body">
                    @if (session('status'))
                    @endif
                </div>
        </ul>

        @yield('content')
    </div>

    <!-- Agrega el script de Bootstrap (asegúrate de tener acceso a Internet para cargar los scripts) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
