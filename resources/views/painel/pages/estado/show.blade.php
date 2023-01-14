@extends('adminlte::page')

@section('title', 'Detalhes do Estado')

@section('content_header')
    <div align="left">
        <h1>Detalhes do Estado <b>{{ $estado->nome_estado }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('estado.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
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
                            <strong>Nome do Estado: </strong> {{ $estado->nome_estado }}
                        </li>
                        <li>
                            <strong>Nome das Iniciais: </strong> {{ $estado->Iniciais }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
