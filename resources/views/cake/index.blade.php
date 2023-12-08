@extends('layouts.app')

@section('template_title')
    Cake
@endsection

@section('content')
    <div class="container-fluid">
        <h1>Tabla de Pasteles</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pasteles') }}
                            </span>
@auth
                             <div class="float-right">
                                <a href="{{ route('cakes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Pastel') }}
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
                                        <th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>



                                    @foreach ($cakes as $cake)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $cake->nombre }}</td>
											<td>{{ $cake->precio }}</td>

                                            <td>
                                                <form action="{{ route('cakes.destroy',$cake->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cakes.show',$cake->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar Datos') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cakes.edit',$cake->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                @endauth
                {!! $cakes->links() !!}
            </div>
        </div>
    </div>
@endsection
