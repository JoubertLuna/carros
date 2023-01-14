@include('painel.includes.alerts')
@csrf
<div class="form-group">
    <h4><b>Cadastro de Cidades</b></h4>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Nome da Cidade:</label>
                <input type="text" name="nome_cidade" id="nome_cidade" class="form-control" placeholder="Nome da Cidade"
                    value="{{ $cidade->nome_cidade ?? old('nome_cidade') }}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label>Código da Cidade:</label>
                <input type="text" name="zip_code" id="zip_code" class="form-control" placeholder="Código da Cidade"
                    value="{{ $cidade->zip_code ?? old('zip_code') }}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label>Estado:</label>
                <select class="form-control select2" name="estado_id" id="estado_id" style="width: 100%;">
                    @foreach ($estados as $estado)
                        @if ($estado->id === @$cidade->estado_id)
                            <option value="{{ $estado->id }}" selected>{{ $estado->nome_estado }}</option>
                        @else
                            <option value="{{ $estado->id }}">{{ $estado->nome_estado }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar Cidade</button>
</div>

@section('js')
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
@stop
