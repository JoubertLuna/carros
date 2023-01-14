@extends('adminlte::page')

@section('title', "Editar Marca {$marca->marca}")

@section('content_header')
    <div align="right">
        <a href="{{ route('marca.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">

        <div class="card-body">
            <form action="{{ route('marca.update', $marca->id) }}" method="POST" class="form">
                @method('PUT')
                @include('painel.pages.marca._partials.form')
            </form>
        </div>
    </div>
@stop
