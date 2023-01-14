@extends('adminlte::page')

@section('title', 'Cadastrar Marcas')

@section('content_header')
    <div align="right">
        <a href="{{ route('marca.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('marca.store') }}" class="form" method="POST">
                @include('painel.pages.marca._partials.form')
            </form>
        </div>
    </div>
@stop
