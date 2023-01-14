@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <div align="right">
        <a href="{{ route('estado.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Cidade</th>
                        <th class="esc">Estado</th>
                        <th class="esc">Código Postal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cidades as $cidade)
                        <tr>
                            <td>{{ $cidade->nome_cidade }}</td>
                            <td class="esc">{{ $cidade->estado->nome_estado }}</td>
                            <td class="esc">{{ $cidade->zip_code }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <style>
        @media screen and (max-width: 480px) {
            .esc {
                display: none;
            }
        }
    </style>
@stop
