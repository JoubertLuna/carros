@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <a href="{{ route('estado.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Novo Estado</a>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Iniciais</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estados as $estado)
                        <tr>
                            <td>{{ $estado->nome_estado }}</td>
                            <td class="esc">{{ $estado->Iniciais }}</td>
                            <td>
                                <a href="{{ route('estado.cidade', $estado->id) }}" title="Ver Cidades do Estado"><i
                                        class="fas fa-city text-dark"></i></a>

                                <a href="{{ route('estado.show', $estado->id) }}" title="Ver Estado Cadastrado"><i
                                        class="fas fa-list text-info"></i></a>

                                <a href="{{ route('estado.edit', $estado->id) }}" title="Editar Dados"><i
                                        class="fa fa-edit text-primary"></i></a>

                                <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                          window.location.href = '{{ route('estado.excluir', $estado->id) }}' }"
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
