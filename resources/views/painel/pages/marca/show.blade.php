@extends('adminlte::page')

@section('title', 'Detalhes da Marca')

@section('content_header')
    <div align="left">
        <h1>Detalhes da Marca <b>{{ $marca->marca }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('marca.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h5><b>Dados Gerais</b></h5>
                    <hr>
                    <ul>
                        <li>
                            <strong>Nome da Marca: </strong> {{ $marca->marca }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
