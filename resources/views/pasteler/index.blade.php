@extends('layouts.app')

@section('template_title')
    Pasteler
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h1>Tabla de Pasteleros</h1>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pastelero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pastelers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Pastelero') }}
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
										<th>Apellido</th>
										<th>Alias</th>
										<th>Teléfono</th>
										<th>Años Trabajados</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pastelers as $pasteler)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pasteler->nombre }}</td>
											<td>{{ $pasteler->apellido }}</td>
											<td>{{ $pasteler->alias }}</td>
											<td>{{ $pasteler->telefono }}</td>
											<td>{{ $pasteler->añostrabajados }}</td>

                                            <td>
                                                <form action="{{ route('pastelers.destroy',$pasteler->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pastelers.show',$pasteler->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar Datos') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pastelers.edit',$pasteler->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $pastelers->links() !!}
            </div>
        </div>
    </div>
@endsection
