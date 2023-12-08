@extends('layouts.app')

@section('template_title')
    Pastel-Ingrediente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Tabla de Ingredientes de Pastel</h1>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pastel-Ingrediente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pingredients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Ingrediente-Pastel') }}
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

										<th>Id Pastel</th>
										<th>Id Ingrediente</th>
										<th>Cantidad de Ingrediente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pingredients as $pingredient)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pingredient->id_cake }}</td>
											<td>{{ $pingredient->id_ingredient }}</td>
											<td>{{ $pingredient->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('pingredients.destroy',$pingredient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pingredients.show',$pingredient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar Datos') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pingredients.edit',$pingredient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $pingredients->links() !!}
            </div>
        </div>
    </div>
@endsection
