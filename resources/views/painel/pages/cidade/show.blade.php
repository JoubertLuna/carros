@extends('adminlte::page')

@section('title', 'Detalhes da Cidade')

@section('content_header')
    <div align="left">
        <h1>Detalhes da Cidade <b>{{ $cidade->nome_cidade }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('cidade.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
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
                            <strong>Nome da Cidade: </strong> {{ $cidade->nome_cidade }}
                        </li>
                        <li>
                            <strong>Código Postal da Cidade: </strong> {{ $cidade->zip_code }}
                        </li>
                        <li>
                            <strong>Nome do Estado: </strong> {{ $cidade->estado->nome_estado }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
