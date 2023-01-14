@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <a href="{{ route('testemunho.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Novo Testemunho</a>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Nome do Autor</th>
                        <th class="esc">Profissão do Autor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testemunhos as $testemunho)
                        @if ($testemunho->ativo === 'N')
                            <tr class="text-muted">
                                <td align="center">
                                    @if ($testemunho->imagem)
                                        <img src="{{ asset('storage/testemunhos/' . $testemunho->imagem) }}" width="70px"
                                            alt="{{ $testemunho->nome_autor }}">
                                    @else
                                        <img src="{{ asset('storage/testemunhos/semtestemunho.png') }}" width="70px">
                                    @endif
                                </td>
                                <td>{{ $testemunho->nome_autor }}</td>
                                <td class="esc">{{ $testemunho->profissao_autor }}</td>
                                <td>
                                    <a href="{{ route('testemunho.show', $testemunho->id) }}"
                                        title="Ver Testemunho Cadastrada"><i class="fas fa-list text-info"></i></a>

                                    <a href="{{ route('testemunho.edit', $testemunho->id) }}" title="Editar Dados"><i
                                            class="fa fa-edit text-primary"></i></a>

                                    <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                        window.location.href = '{{ route('testemunho.excluir', $testemunho->id) }}' }"
                                        title="Excluir Dados">
                                        <i class="fa fa-trash text-danger"></i></a>

                                </td>
                            </tr>
                        @else
                            <tr>
                                <td align="center">
                                    @if ($testemunho->imagem)
                                        <img src="{{ asset('storage/testemunhos/' . $testemunho->imagem) }}" width="70px"
                                            alt="{{ $testemunho->nome_autor }}">
                                    @else
                                        <img src="{{ asset('storage/testemunhos/semtestemunho.png') }}" width="70px">
                                    @endif
                                </td>
                                <td>{{ $testemunho->nome_autor }}</td>
                                <td class="esc">{{ $testemunho->profissao_autor }}</td>
                                <td>
                                    <a href="{{ route('testemunho.show', $testemunho->id) }}"
                                        title="Ver Testemunho Cadastrada"><i class="fas fa-list text-info"></i></a>

                                    <a href="{{ route('testemunho.edit', $testemunho->id) }}" title="Editar Dados"><i
                                            class="fa fa-edit text-primary"></i></a>

                                    <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                    window.location.href = '{{ route('testemunho.excluir', $testemunho->id) }}' }"
                                        title="Excluir Dados">
                                        <i class="fa fa-trash text-danger"></i></a>

                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
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
