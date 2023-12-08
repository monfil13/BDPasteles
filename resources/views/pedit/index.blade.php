@extends('layouts.app')

@section('template_title')
    Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Tabla de Pedidos</h1>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedits.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Pedido') }}
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
										<th>Fecha Pedido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedits as $pedit)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pedit->id_client }}</td>
											<td>{{ $pedit->fechapedido }}</td>

                                            <td>
                                                <form action="{{ route('pedits.destroy',$pedit->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pedits.show',$pedit->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar Datos') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pedits.edit',$pedit->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $pedits->links() !!}
            </div>
        </div>
    </div>
@endsection
