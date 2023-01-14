@include('painel.includes.alerts')
@csrf
<div class="form-group">
    <h4><b>Cadastro de Veículos</b></h4>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Nome do Veículo:</label>
                <input type="text" name="nome_veiculo" id="nome_veiculo" class="form-control"
                    placeholder="Nome do Veículo" value="{{ $veiculo->nome_veiculo ?? old('nome_veiculo') }}">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Marca do Veículo:</label>
                <select class="form-control select2" name="marca_id" id="marca_id" style="width: 100%;">
                    @foreach ($marcas as $marca)
                        @if ($marca->id === @$veiculo->marca_id)
                            <option value="{{ $marca->id }}" selected>{{ $marca->marca }}</option>
                        @else
                            <option value="{{ $marca->id }}">{{ $marca->marca }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Combustível:</label>
                <select class="form-control select2" name="class" id="class" style="width: 100%;">
                    <option value="gasolina" {{ old('class', $veiculo->class ?? '') === 'gasolina' ? 'selected' : '' }}>
                        Gasolina</option>
                    <option value="alcool" {{ old('class', $veiculo->class ?? '') === 'alcool' ? 'selected' : '' }}>
                        Álcool</option>
                    <option value="diesel" {{ old('class', $veiculo->class ?? '') === 'diesel' ? 'selected' : '' }}>
                        Diesel</option>
                    <option value="flex" {{ old('class', $veiculo->class ?? '') === 'flex' ? 'selected' : '' }}>
                        Flex</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Ativo:</label>
                <select class="form-control select2" name="ativo" id="ativo" style="width: 100%;">
                    <option value="S" {{ old('ativo', $veiculo->ativo ?? '') === 'S' ? 'selected' : '' }}>
                        Sim</option>
                    <option value="N" {{ old('ativo', $veiculo->ativo ?? '') === 'N' ? 'selected' : '' }}>
                        Não</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Quantidade de Passageiros:</label>
                <input type="number" name="qty_passageiros" id="qty_passageiros" class="form-control"
                    placeholder="EX: 5" value="{{ $veiculo->qty_passageiros ?? old('qty_passageiros') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Quantidade de Lugares:</label>
                <input type="number" name="qty_lugares" id="qty_lugares" class="form-control" placeholder="EX: 5"
                    value="{{ $veiculo->qty_lugares ?? old('qty_lugares') }}">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Quantidade de Portas:</label>
                <input type="number" name="qty_portas" id="qty_portas" class="form-control" placeholder="EX: 4"
                    value="{{ $veiculo->qty_portas ?? old('qty_portas') }}">
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Descrição sobre o veículo:</label>
                <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição sobre o veículo"
                    rows="3">{{ $veiculo->descricao ?? old('descricao') }}</textarea>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-7">
            <div class="btn-group w-100">
                <span class="btn btn-success col fileinput-button">
                    <span>
                        <input type="file" name="imagem" id="imagem" class="form-control-file"
                            onchange="pegaArquivo(this.files)" value="{{ $veiculo->imagem ?? old('imagem') }}">
                    </span>
                </span>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                @if (@$veiculo->imagem)
                    <img src="{{ asset('storage/upload/' . @$veiculo->imagem) }}" width="200px"
                        alt="{{ @$veiculo->nome_veiculo }}" id="imgup">
                @else
                    <img src="{{ asset('storage/upload/semveiculo.png') }}" width="200px" id="imgup">
                @endif
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar Veículo</button>
</div>

@section('js')
    <script>
        function pegaArquivo(files) {
            var file = files[0];
            const fileReader = new FileReader();
            fileReader.onloadend = function() {
                $("#imgup").attr("src", fileReader.result);
            }
            fileReader.readAsDataURL(file);
        }
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
@stop
