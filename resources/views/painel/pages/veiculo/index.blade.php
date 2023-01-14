@extends('adminlte::page')

@section('title', 'LARA CAR')

@section('content_header')
    <a href="{{ route('veiculo.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Novo Veículo</a>
@stop

@section('content')

    @include('painel.includes.alerts')

    <div class="card">
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Imagem do Veículo</th>
                        <th>Nome do Veículo</th>
                        <th class="esc">Marca do Veículo</th>
                        <th class="esc">Quantidade de Passageiros</th>
                        <th class="esc">Ativo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($veiculos as $veiculo)
                        @if ($veiculo->ativo === 'N')
                            <tr class="text-muted">
                                <td align="center">
                                    @if ($veiculo->imagem)
                                        <img src="{{ asset('storage/upload/' . $veiculo->imagem) }}" width="70px"
                                            alt="{{ $veiculo->nome_veiculo }}">
                                    @else
                                        <img src="{{ asset('storage/upload/semveiculo.png') }}" width="70px">
                                    @endif
                                </td>
                                <td>{{ $veiculo->nome_veiculo }}</td>
                                <td class="esc">{{ $veiculo->marca->marca }}</td>
                                <td class="esc">{{ $veiculo->qty_passageiros }}</td>
                                <td class="esc">{{ $veiculo->ativo === 'S' ? 'Sim' : 'Não' }}</td>

                                <td>
                                    <a href="{{ route('veiculo.show', $veiculo->id) }}" title="Ver veículo Cadastrado"><i
                                            class="fas fa-list text-info"></i></a>

                                    <a href="{{ route('veiculo.edit', $veiculo->id) }}" title="Editar Dados"><i
                                            class="fa fa-edit text-primary"></i></a>

                                    <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                        window.location.href = '{{ route('veiculo.excluir', $veiculo->id) }}' }"
                                        title="Excluir Dados">
                                        <i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td align="center">
                                    @if ($veiculo->imagem)
                                        <img src="{{ asset('storage/upload/' . $veiculo->imagem) }}" width="70px"
                                            alt="{{ $veiculo->nome_veiculo }}">
                                    @else
                                        <img src="{{ asset('storage/upload/semveiculo.png') }}" width="70px">
                                    @endif
                                </td>
                                <td>{{ $veiculo->nome_veiculo }}</td>
                                <td class="esc">{{ $veiculo->marca->marca }}</td>
                                <td class="esc">{{ $veiculo->qty_passageiros }}</td>
                                <td class="esc">{{ $veiculo->ativo === 'S' ? 'Sim' : 'Não' }}</td>

                                <td>
                                    <a href="{{ route('veiculo.show', $veiculo->id) }}" title="Ver veículo Cadastrado"><i
                                            class="fas fa-list text-info"></i></a>

                                    <a href="{{ route('veiculo.edit', $veiculo->id) }}" title="Editar Dados"><i
                                            class="fa fa-edit text-primary"></i></a>

                                    <a href="javascript:if(confirm('Deseja realmente excluir')) {
                                    window.location.href = '{{ route('veiculo.excluir', $veiculo->id) }}' }"
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
