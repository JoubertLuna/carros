@extends('adminlte::page')

@section('title', "Editar Veículo {$veiculo->nome_veiculo}")

@section('content_header')
    <div align="right">
        <a href="{{ route('veiculo.index') }}" class="btn btn-danger"><i class="fas fa-backward"></i> Voltar</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('veiculo.update', $veiculo->id) }}" method="POST" class="form" enctype="multipart/form-data">
                @method('PUT')
                @include('painel.pages.veiculo._partials.form')
            </form>
        </div>
    </div>
@stop
