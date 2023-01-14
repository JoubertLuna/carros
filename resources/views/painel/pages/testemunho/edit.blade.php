@extends('adminlte::page')

@section('title', "Editar Testemunho {$testemunho->nome_autor}")

@section('content_header')
    <div align="right">
        <a href="{{ route('testemunho.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">

        <div class="card-body">
            <form action="{{ route('testemunho.update', $testemunho->id) }}" method="POST" class="form" enctype="multipart/form-data">
                @method('PUT')
                @include('painel.pages.testemunho._partials.form')
            </form>
        </div>
    </div>
@stop
