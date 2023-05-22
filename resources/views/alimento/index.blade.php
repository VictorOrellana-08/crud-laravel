@extends('layouts.app')

@section('template_title')
    Alimento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alimento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alimentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Alimneto') }}
                                </a>
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
                                        <th>#</th>                                        
										<th>Nombre</th>
										<th>Libras</th>
										<th>Descripción</th>
										<th>Precio</th>
										<th>Lote</th>
										<th>Fecha de caducidad</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alimentos as $alimento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $alimento->nombre }}</td>
											<td>{{ $alimento->libras }}</td>
											<td>{{ $alimento->descripcion }}</td>
											<td>{{ $alimento->precio }}</td>
											<td>{{ $alimento->lote }}</td>
											<td>{{ $alimento->fechacaducidad }}</td>

                                            <td>
                                                <form action="{{ route('alimentos.destroy',$alimento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alimentos.show',$alimento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Visualizar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alimentos.edit',$alimento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $alimentos->links() !!}
            </div>
        </div>
    </div>
@endsection
