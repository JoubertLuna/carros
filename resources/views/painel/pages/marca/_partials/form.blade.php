@include('painel.includes.alerts')
@csrf
<div class="form-group">
    <h4><b>Cadastro da Marcas</b></h4>
    <hr>
    <div class="form-group">
        <label>Nome da Marca:</label>
        <input type="text" name="marca" id="marca" class="form-control" placeholder="Nome da Marca"
            value="{{ $marca->marca ?? old('marca') }}">
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar Marca</button>
</div>
