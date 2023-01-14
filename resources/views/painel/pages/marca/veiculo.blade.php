@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <div align="right">
        <a href="{{ route('marca.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Imagem do Veículo</th>
                        <th>Nome do Veículo</th>
                        <th class="esc">Quantidade de Passageiros</th>
                        <th class="esc">Ativo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($veiculos as $veiculo)
                        @if ($veiculo->ativo === 'N')
                            <tr class="text-muted">
                                <td align="center">
                                    @if ($veiculo->imagem)
                                        <img src="{{ asset('storage/upload/' . $veiculo->imagem) }}" width="70px"
                                            alt="{{ $veiculo->nome_veiculo }}">
                                    @else
                                        <img src="{{ asset('storage/upload/semveiculo.png') }}" width="70px">
                                    @endif
                                </td>
                                <td>{{ $veiculo->nome_veiculo }}</td>
                                <td class="esc">{{ $veiculo->qty_passageiros }}</td>
                                <td class="esc">{{ $veiculo->ativo === 'S' ? 'Sim' : 'Não' }}</td>
                            </tr>
                        @else
                            <tr>
                                <td align="center">
                                    @if ($veiculo->imagem)
                                        <img src="{{ asset('storage/upload/' . $veiculo->imagem) }}" width="70px"
                                            alt="{{ $veiculo->nome_veiculo }}">
                                    @else
                                        <img src="{{ asset('storage/upload/semveiculo.png') }}" width="70px">
                                    @endif
                                </td>
                                <td>{{ $veiculo->nome_veiculo }}</td>
                                <td class="esc">{{ $veiculo->qty_passageiros }}</td>
                                <td class="esc">{{ $veiculo->ativo === 'S' ? 'Sim' : 'Não' }}</td>
                            </tr>
                        @endif
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
