@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <a href="{{ route('cidade.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nova Cidade</a>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Cidade</th>
                        <th class="esc">Estado</th>
                        <th class="esc">Código Postal</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cidades as $cidade)
                        <tr>
                            <td>{{ $cidade->nome_cidade }}</td>
                            <td class="esc">{{ $cidade->estado->nome_estado }}</td>
                            <td class="esc">{{ $cidade->zip_code }}</td>

                            <td>
                                <a href="{{ route('cidade.show', $cidade->id) }}" title="Ver Cidade Cadastrada"><i
                                        class="fas fa-list text-info"></i></a>

                                <a href="{{ route('cidade.edit', $cidade->id) }}" title="Editar Dados"><i
                                        class="fa fa-edit text-primary"></i></a>

                                <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                        window.location.href = '{{ route('cidade.excluir', $cidade->id) }}' }"
                                    title="Excluir Dados">
                                    <i class="fa fa-trash text-danger"></i></a>
                            </td>
                        </tr>
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
