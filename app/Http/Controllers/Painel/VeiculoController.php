<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\VeiculoRequest;
use App\Models\Painel\Marca;
use App\Models\Painel\Veiculo;
use Illuminate\Support\Facades\Storage;

class VeiculoController extends Controller
{
  private $repository;

  public function __construct(Veiculo  $veiculo)
  {
    $this->repository = $veiculo;
  }

  /**
   * Index
   */
  public function index()
  {
    $veiculos = $this->repository->with('marca')->latest()->paginate();
    return view('painel.pages.veiculo.index', compact('veiculos'));
  }

  /**
   * Create
   */
  public function create()
  {
    $marcas = Marca::all('marca', 'id');
    return view('painel.pages.veiculo.create', compact('marcas'));
  }

  /**
   * Store
   */
  public function store(VeiculoRequest $request)
  {
    if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
      $nome_imagem = $request->imagem->getClientOriginalName();
      $request->imagem->storeAs('upload', $nome_imagem);
    } else {
      $nome_imagem = 'semveiculo.png';
    }

    $data = $request->except('_token');
    $data['imagem'] = $nome_imagem;

    if ($this->repository->create($data)) {
      return redirect()->route('veiculo.index')->with('success', 'Veículo cadastrado com sucesso');
    } else {
      return redirect()->route('veiculo.index')->with('error', 'Falha ao cadastrar o Veículo');
    }
  }

  /**
   * Show
   */
  public function show($id)
  {
    if (!$veiculo = $this->repository->with('marca')->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.veiculo.show', compact('veiculo'));
  }

  /**
   * Edit
   */
  public function edit($id)
  {
    $marcas = Marca::all('marca', 'id');

    if (!$veiculo = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.veiculo.edit', compact('veiculo', 'marcas'));
  }

  /**
   * Update
   */
  public function update(VeiculoRequest $request, $id)
  {

    if (!$veiculo = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    //Update de Imagem
    if ($request->imagem) {
      if ($veiculo->imagem && Storage::exists($veiculo->imagem)) {
        Storage::delete($veiculo->imagem);
      }
      $nome_imagem_edit = $request->imagem->getClientOriginalName();
      $request->imagem->storeAs('upload', $nome_imagem_edit);
    } elseif ($request->imagem === null) {
      $nome_imagem_edit = $veiculo['imagem'];
    } else {
      $nome_imagem_edit = 'semveiculo.png';
    }
    //Update de Imagem

    $veiculo->nome_veiculo = $request->input('nome_veiculo');
    $veiculo->marca_id = $request->input('marca_id');
    $veiculo->qty_passageiros = $request->input('qty_passageiros');
    $veiculo->qty_lugares = $request->input('qty_lugares');
    $veiculo->qty_portas = $request->input('qty_portas');
    $veiculo->ativo = $request->input('ativo');
    $veiculo->class = $request->input('class');
    $veiculo->descricao = $request->input('descricao');
    $veiculo->imagem = @$nome_imagem_edit;
    $veiculo->update();

    if ($veiculo) {
      return redirect()->route('veiculo.index')->with('success', 'Veículo editado com sucesso');
    } else {
      return redirect()->route('veiculo.index')->with('error', 'Falha ao editar o Veículo');
    }
  }

  /**
   * Excluir
   */
  public function excluir($id)
  {
    $veiculo = Veiculo::find($id);
    if ($veiculo) {
      $veiculo->delete();
      return redirect()->route('veiculo.index')->with('danger', 'Veículo excluído com sucesso!');
    } else {
      return redirect()->route('veiculo.index')->with('error', 'Falha ao excluir o Veículo');
    }
  }
}
