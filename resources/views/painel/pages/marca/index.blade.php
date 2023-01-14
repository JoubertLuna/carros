@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <a href="{{ route('marca.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Nova Marca</a>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nome da Marca</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <td>{{ $marca->marca }}</td>
                            <td>
                              <a href="{{ route('marca.veiculo', $marca->id) }}" title="Ver Veículos da Marca"><i
                                class="fas fa-car text-dark"></i></a>

                                <a href="{{ route('marca.show', $marca->id) }}" title="Ver Marca Cadastrada"><i
                                        class="fas fa-list text-info"></i></a>

                                <a href="{{ route('marca.edit', $marca->id) }}" title="Editar Dados"><i
                                        class="fa fa-edit text-primary"></i></a>

                                <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                          window.location.href = '{{ route('marca.excluir', $marca->id) }}' }"
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
