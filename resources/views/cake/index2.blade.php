@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas Pasteles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .custom-navbar {
            background-color: #4e0963;
            color: #000000;
        }

        .custom-navbar .nav-item:hover {
            background-color: rgb(165, 66, 110);
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
            <a class="navbar-brand"><h1>🤤¡Bienvenido a las vistas pasteleras!🍰</h1></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link" href="{{ route('cake.vistaPastelesNombre') }}">Vista1</a>
                    <a class="nav-link" href="{{ route('cake.vistaPrecioPromedio') }}">Vista2</a>
                    <a class="nav-link" href="{{ route('pasteler.vistaPastelerosApodo') }}">Vista3</a>
                    <a class="nav-link" href="{{ route('pedit.vistaPedidosFecha') }}">Vista4</a>
                    <a class="nav-link" href="{{ route('client.vistaNumerosTeziu') }}">Vista5</a>
                    </li>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Regresar👀') }}</a>
                    </div>


                </ul>
            </div>
        </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
