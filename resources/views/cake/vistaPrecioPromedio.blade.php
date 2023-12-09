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
      background-color: #c9889c;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
    <title>Vistas</title>
</head>
<body>
<h1 align="center">Vista de Pasteles</h1>
<div class="float-right" align="right">
    <a class="btn btn-primary" href="{{ route('cake.index2') }}"> {{ __('Regresar') }}</a>
</div>
<h2 align="center">Vista de Pasteles Con Promedio Total de Todos Ellos</h2>

<table style="background-color: #87CEEB; padding: 10px;">
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>PRECIO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pasteles as $pastel)
            <tr>
                <td>{{ $pastel->nombre }}</td>
                <td>${{ $pastel->precio }}</td>
            </tr>
        @endforeach
        <tr>
            <td><strong>PROMEDIO</strong></td>
            <td><strong>${{ number_format($promedioPrecios, 2) }}</strong></td>
        </tr>
    </tbody>
</table>
