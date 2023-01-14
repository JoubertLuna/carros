@extends('adminlte::page')

@section('title', 'Cadastrar Cidade')

@section('content_header')
    <div align="right">
        <a href="{{ route('cidade.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('cidade.store') }}" class="form" method="POST">
                @include('painel.pages.cidade._partials.form')
            </form>
        </div>
    </div>
@stop
