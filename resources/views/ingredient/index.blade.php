@extends('layouts.app')

@section('template_title')
    Ingrediente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Tabla de Ingredientes</h1>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingrediente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingredients.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Ingrediente') }}
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

										<th>Nombre</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingredients as $ingredient)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $ingredient->nombre }}</td>
											<td>{{ $ingredient->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('ingredients.destroy',$ingredient->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingredients.show',$ingredient->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar Datos') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingredients.edit',$ingredient->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $ingredients->links() !!}
            </div>
        </div>
    </div>
@endsection
