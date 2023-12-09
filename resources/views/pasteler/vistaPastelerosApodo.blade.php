<?php use App\Models\Pasteler;
use App\Http\Controllers\PastelerController;
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
      background-color: #888ac9;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
    <title>Vistas</title>
</head>
<body>
<h1 align="center">Vista de Pasteleros</h1>
<div class="float-right" align="right">
    <a class="btn btn-primary" href="{{ route('cake.index2') }}"> {{ __('Regresar') }}</a>
</div>
<h2 align="center">Vista de Pasteleros Ordenados Alfabéticamente por Apodo</h2>

<table style="background-color: #af7679; padding: 10px;">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Apodo</th>
            <th>Teléfono</th>
            <th>Años Trabajados</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasteleros as $pastelero)
            <tr>
                <td>{{ $pastelero->id }}</td>
                <td>{{ $pastelero->nombre }}</td>
                <td>{{ $pastelero->apellido }}</td>
                <td>{{ $pastelero->alias }}</td>
                <td>{{ $pastelero->telefono }}</td>
                <td>{{ $pastelero->añostrabajados }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
