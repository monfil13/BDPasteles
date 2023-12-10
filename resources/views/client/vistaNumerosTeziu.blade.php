<?php use App\Models\Cake;
use App\Http\Controllers\CakeController;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #000000;
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #5dc685;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
    <title>Vistas</title>
    <h1 align="center">Vista de Clientes</h1>
</head>
<body>
<div class="float-right" align="right">
    <a class="btn btn-primary" href="{{ route('cake.index2') }}"> {{ __('Regresar') }}</a>
</div>

<table style="background-color: #63c8ad; padding: 10px;">

    <h2 align="center">Clientes con Lada de Teziutlán</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientesConTelefono as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 align="center">Otra Lada</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientesSinTelefono as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>{{ $cliente->telefono }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
