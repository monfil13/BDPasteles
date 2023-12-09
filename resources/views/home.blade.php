<?php
use App\Http\Controllers\VistillaController;
?>
@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Pasteles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color: #383600;
            color: #ffffff;
        }

        .custom-navbar .nav-item:hover {
            background-color: rgb(120, 122, 52);
        }
        .custom-images-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
            position: relative;
        }
        .custom-images {
            width: 300px;
            height: auto;
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-3">

        <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
            <a class="navbar-brand"><h1>¡Bienvenido a la BD de Pasteles! 🍰</h1></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="navbar-brand"><h3>👀Ver👀</h3>
                    <a class="nav-link" href="{{ route('cake.consulta') }}">Consulta 1</a>
                    <a class="nav-link" href="{{ route('cake.consulta2') }}">Consulta 2</a>
                    <a class="nav-link" href="{{ route('special.consulta3') }}">Consulta 3</a>
                    <a class="nav-link" href="{{ route('cake.index2') }}">Vistas</a>
                    </li>

<li class="nav-item">
    <a class="navbar-brand"><h3>🍒 Tablas - -</h3>
            <a class="nav-link" href="{{ route('cake.index') }}">Pasteles</a>
            <a class="nav-link" href="{{ route('pasteler.index') }}">Pasteleros</a>
            <a class="nav-link" href="{{ route('client.index') }}">Clientes</a>
            <a class="nav-link" href="{{ route('pedit.index') }}">Pedidos</a>

</li>
<li class="nav-item">
    <a class="navbar-brand"><h3>- - CRUD 🍒</h3>
                        <a class="nav-link" href="{{ route('ingredient.index') }}">Ingredientes</a>
                        <a class="nav-link" href="{{ route('pingredient.index') }}">Pastel-Ingrediente</a>
                        <a class="nav-link" href="{{ route('special.index') }}">Pedido Especial</a>
                        <a class="nav-link" href="{{ route('sucursal.index') }}">Sucursales Pasteleria</a>
                    </li>
                </ul>
            </div>
        </nav>

        <img src="{{ asset('/pasteles.jpeg') }}" class="custom-image rounded" alt="Pasteles Image">
        <img src="{{ asset('/pasteles.jpeg') }}" class="custom-image rounded" alt="Pasteles Image">
        <img src="{{ asset('/pasteles.jpeg') }}" class="custom-image rounded" alt="Pasteles Image">
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
        <!--
<a href="{{ route('createBackup') }}" class="btn btn-primary">Crear Backup</a> -->
</html>
