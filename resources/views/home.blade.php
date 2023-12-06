@extends('layouts.app')


<!-- resources/views/dashboard/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Pasteles</title>
    <!-- Agrega el enlace al CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega estilos de CSS personalizados para la barra de navegación -->
    <style>
        /* Establece el color de fondo y el color del texto de la barra de navegación */
        .custom-navbar {
            background-color: #4CAF50; /* Color de fondo */
            color: #ffffff; /* Color del texto */
        }
        /* Establece el color de fondo al pasar el ratón por encima de los elementos de la barra de navegación */
        .custom-navbar .nav-item:hover {
            background-color: #45a049; /* Color de fondo al pasar el ratón por encima */
        }
        .custom-images-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Establece la altura del contenedor al 100% de la altura de la ventana */
            position: relative;
        }
        .custom-images {
            width: 300px; /* Establece el tamaño deseado en píxeles */
            height: auto;
            /* Alinea la imagen en la parte inferior del contenedor */
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-3">
        <!-- Barra de navegación colorida -->
        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
            <a class="navbar-brand" href="{{ route('home') }}">Bienvenido, ¿qué deseas buscar?</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('consulta.index') }}">Consultas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cake.index') }}">Pasteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cake.index') }}">Pasteleros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cake.index') }}">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cake.index') }}">Pedidos</a>
                    </li>
                    <!-- Agrega enlaces a otras tres tablas según sea necesario -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cake.index') }}">Ingredientes</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Agrega una imagen de pasteles con una clase personalizada -->
        <img src="{{ asset('/pasteles.jpeg') }}" class="custom-image rounded" alt="Pasteles Image">
        <img src="{{ asset('/pasteles.jpeg') }}" class="custom-image rounded" alt="Pasteles Image">
        <img src="{{ asset('/pasteles.jpeg') }}" class="custom-image rounded" alt="Pasteles Image">

        <!-- Resto del código... -->

    </div>

    <!-- Agrega el script de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
