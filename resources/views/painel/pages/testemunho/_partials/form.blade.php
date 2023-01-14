@include('painel.includes.alerts')
@csrf
<div class="form-group">
    <h4><b>Cadastro de Testemunhos</b></h4>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <div class="form-group">
                <label>Nome do Autor:</label>
                <input type="text" name="nome_autor" id="nome_autor" class="form-control" placeholder="Nome do Autor"
                    value="{{ $testemunho->nome_autor ?? old('nome_autor') }}">
            </div>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Profissão do Autor:</label>
                <input type="text" name="profissao_autor" id="profissao_autor" class="form-control"
                    placeholder="Profissão do Autor"
                    value="{{ $testemunho->profissao_autor ?? old('profissao_autor') }}">
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Ativo:</label>
                <select class="form-control select2" name="ativo" id="ativo" style="width: 100%;">
                    <option value="S" {{ old('ativo', $testemunho->ativo ?? '') === 'S' ? 'selected' : '' }}>
                        Sim</option>
                    <option value="N" {{ old('ativo', $testemunho->ativo ?? '') === 'N' ? 'selected' : '' }}>
                        Não</option>
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Descrição do Testemunho:</label>
                <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição do Testemunho"
                    rows="3">{{ $testemunho->descricao ?? old('descricao') }}</textarea>
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
                            onchange="pegaArquivo(this.files)" value="{{ $testemunho->imagem ?? old('imagem') }}">
                    </span>
                </span>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                @if (@$testemunho->imagem)
                    <img src="{{ asset('storage/testemunhos/' . @$testemunho->imagem) }}" width="200px"
                        alt="{{ @$testemunho->nome_autor }}" id="imgup">
                @else
                    <img src="{{ asset('storage/testemunhos/semtestemunho.png') }}" width="200px" id="imgup">
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
