<?php use App\Models\Pedit;
use App\Http\Controllers\PeditController;
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
</head>
<body>
<h1 align="center">Vista de Pedidos</h1>
<div class="float-right" align="right">
    <a class="btn btn-primary" href="{{ route('cake.index2') }}"> {{ __('Regresar') }}</a>
</div>
<h2 align="center">Vista de Pedidos Ordenados por Fecha</h2>

<table style="background-color: #63c8ad; padding: 10px;">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>ID Cliente</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->id_client }}</td>
                <td>{{ $pedido->fechapedido }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
