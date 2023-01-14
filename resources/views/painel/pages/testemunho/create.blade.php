@extends('adminlte::page')

@section('title', 'Cadastrar Testemunho')

@section('content_header')
    <div align="right">
        <a href="{{ route('testemunho.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('testemunho.store') }}" class="form" method="POST" enctype="multipart/form-data">
                @include('painel.pages.testemunho._partials.form')
            </form>
        </div>
    </div>
@stop
