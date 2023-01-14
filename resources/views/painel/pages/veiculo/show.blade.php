@extends('adminlte::page')

@section('title', 'Detalhes do Veículo')

@section('content_header')
    <div align="left">
        <h1>Detalhes do Veículo <b>{{ $veiculo->nome_veiculo }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('veiculo.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5><b>Dados Gerais</b></h5>
                    <hr>
                    <ul>
                        <li>
                            <strong>Nome do Veículo: </strong> {{ $veiculo->nome_veiculo }}
                        </li>
                        <li>
                            <strong>Veículo Ativo: </strong> {{ $veiculo->ativo === 'S' ? 'Sim' : 'Não' }}
                        </li>
                        <li>
                            <strong>Quantidade de Passageiros: </strong> {{ $veiculo->qty_passageiros }}
                        </li>
                        <li>
                            <strong>Quantidade de Lugares: </strong> {{ $veiculo->qty_lugares }}
                        </li>
                        <li>
                            <strong>Quantidade de Portas: </strong> {{ $veiculo->qty_portas }}
                        </li>
                        <li>
                            <strong>Combustível: </strong> {{ $veiculo->class }}
                        </li>
                        <li>
                            <strong>Marca do Veículo: </strong> {{ $veiculo->marca->marca }}
                        </li>
                        <li>
                            <strong>descrição do Veículo: </strong> {{ $veiculo->descricao }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5><b>Imagem do Veículo</b></h5>
                    <hr>
                    <div class="form-group">
                        @if (@$veiculo->imagem)
                            <img src="{{ asset('storage/upload/' . @$veiculo->imagem) }}" width="250px"
                                alt="{{ @$veiculo->nome_veiculo }}">
                        @else
                            <img src="{{ asset('storage/upload/semveiculo.png') }}" width="250px">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
