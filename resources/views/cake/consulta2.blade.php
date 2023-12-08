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
      background-color: #76b4e4;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
  </style>
    <title>Consultas</title>
</head>
<body>
<h1 align="center">Consulta de Pasteles</h1>
<div class="float-right" align="right">
    <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Regresar') }}</a>
</div>
<h2 align="center">Tabla de los pasteles que sobrepasan los $100</h2>
<table>
<thead>
<tr>
<th align="center">ID</th>
<th align="center">NOMBRE DEL PASTEL</th>
<th align="">PRECIO</th>
</tr>
</thead>

@forelse ($pasteles as $pastel)
<tr>
    <th>{{$pastel->id}}</th>
    <th>{{$pastel->nombre}}</th>
    <th>{{$pastel->precio}}</th>
    </tr>
@empty
<tr>No hay datos</tr>
@endforelse

</table>

</table>
</body>
</html>
