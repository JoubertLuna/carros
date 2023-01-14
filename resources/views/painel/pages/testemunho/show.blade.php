@extends('adminlte::page')

@section('title', 'Detalhes do Testemunho')

@section('content_header')
    <div align="left">
        <h1>Detalhes do Testemunho <b>{{ $testemunho->nome_autor }}</b></h1>
    </div>
    <div align="right">
        <a href="{{ route('testemunho.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
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
                            <strong>Nome do Autor: </strong> {{ $testemunho->nome_autor }}
                        </li>
                        <li>
                            <strong>Profissão do Autor: </strong> {{ $testemunho->profissao_autor }}
                        </li>
                        <li>
                            <strong>Testemunho Ativo: </strong> {{ $testemunho->ativo === 'S' ? 'Sim' : 'Não' }}
                        </li>
                        <li>
                            <strong>descrição do Testemunho: </strong> {{ $testemunho->descricao }}
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5><b>Imagem do Testemunho</b></h5>
                    <hr>
                    <div class="form-group">
                        @if (@$testemunho->imagem)
                            <img src="{{ asset('storage/testemunhos/' . @$testemunho->imagem) }}" width="250px"
                                alt="{{ @$testemunho->nome_autor }}">
                        @else
                            <img src="{{ asset('storage/testemunhos/semtestemunho.png') }}" width="250px">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
