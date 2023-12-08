<?php use App\Models\Special;
use App\Http\Controllers\SpecialController;
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
      background-color: #e388c5;
    }

    tr:nth-child(even) {
      background-color: #b9649c;
    }
  </style>
    <title>Consultas</title>
</head>
<body>
<h1 align="center">Consulta de Pedidos Especiales</h1>
<div class="float-right" align="right">
    <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Regresar') }}</a>
</div>
<h2 align="center">Tabla de Pedidos Especiales</h2>
<table>
<thead>
<tr>
<th>ID</th>
<th>ID DEL CLIENTE</th>
<th>ID DEL PASTELERO</th>
<th>DESCRIPCIÓN</th>
<th>SABOR</th>
<th>FECHA Y HORA DEL PEDIDO</th>
</tr>
</thead>

@forelse ($specials as $special)
<tr>
    <th>{{$special->id}}</th>
    <th>{{$special->id_client}}</th>
    <th>{{$special->id_pasteler}}</th>
    <th>{{$special->descripcion}}</th>
    <th>{{$special->sabor}}</th>
    <th>{{$special->fechayhorapedido}}</th>
    </tr>
@empty
<tr>No hay datos</tr>
@endforelse

</table>

</table>
</body>
</html>
