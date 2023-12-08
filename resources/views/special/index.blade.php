@extends('layouts.app')

@section('template_title')
    Special
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Tabla de Pedidos Especiales</h1>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido Especial') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('specials.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Pedido Especial') }}
                                </a>
                              </div>
                              <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('home') }}"> {{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>

										<th>Id Cliente</th>
										<th>Id Pastelero</th>
										<th>Descripción</th>
										<th>Sabor</th>
										<th>Fecha-Hora del Pedido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($specials as $special)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $special->id_client }}</td>
											<td>{{ $special->id_pasteler }}</td>
											<td>{{ $special->descripcion }}</td>
											<td>{{ $special->sabor }}</td>
											<td>{{ $special->fechayhorapedido }}</td>

                                            <td>
                                                <form action="{{ route('specials.destroy',$special->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('specials.show',$special->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar Datos') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('specials.edit',$special->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $specials->links() !!}
            </div>
        </div>
    </div>
@endsection
