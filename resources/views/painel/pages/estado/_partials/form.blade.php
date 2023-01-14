@include('painel.includes.alerts')
@csrf
<div class="form-group">
    <h4><b>Cadastro de Estados</b></h4>
    <hr>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label>Nome do Estado:</label>
                <input type="text" name="nome_estado" id="nome_estado" class="form-control" placeholder="Nome do Estado"
                    value="{{ $estado->nome_estado ?? old('nome_estado') }}">
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <label>Iniciais do Estado:</label>
                <input type="text" name="Iniciais" id="Iniciais" class="form-control"
                    placeholder="Iniciais do Estado" value="{{ $estado->Iniciais ?? old('Iniciais') }}">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar Estado</button>
</div>
