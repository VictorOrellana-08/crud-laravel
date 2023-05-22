@extends('layouts.app')

@section('template_title')
    {{ $alimento->name ?? "{{ __('Show') Alimento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Visualizador de') }} Alimento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alimentos.index') }}"> {{ __('Atrás') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $alimento->nombre }}
                        </div><br>
                        <div class="form-group">
                            <strong>Libras:</strong>
                            {{ $alimento->libras }}
                        </div><br>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $alimento->descripcion }}
                        </div><br>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $alimento->precio }}
                        </div><br>
                        <div class="form-group">
                            <strong>Lote:</strong>
                            {{ $alimento->lote }}
                        </div><br>
                        <div class="form-group">
                            <strong>Fecha de caducidad:</strong>
                            {{ $alimento->fechacaducidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
