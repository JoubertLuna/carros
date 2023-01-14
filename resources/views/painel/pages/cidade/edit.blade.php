@extends('adminlte::page')

@section('title', "Editar Cidade {$cidade->nome_cidade}")

@section('content_header')
    <div align="right">
        <a href="{{ route('cidade.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('cidade.update', $cidade->id) }}" method="POST" class="form">
                @method('PUT')
                @include('painel.pages.cidade._partials.form')
            </form>
        </div>
    </div>
@stop
