<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\CidadeRequest;
use App\Models\Painel\Cidade;
use App\Models\Painel\Estado;

class CidadeController extends Controller
{
  private $repository;

  public function __construct(Cidade  $cidade)
  {
    $this->repository = $cidade;
  }

  /**
   * Index
   */
  public function index()
  {
    $cidades = $this->repository->with('estado')->latest()->paginate(9384);
    return view('painel.pages.cidade.index', compact('cidades'));
  }

  /**
   * Create
   */
  public function create()
  {
    $estados = Estado::all('Iniciais', 'nome_estado', 'id');
    return view('painel.pages.cidade.create', compact('estados'));
  }

  /**
   * Store
   */
  public function store(CidadeRequest $request)
  {
    if ($this->repository->create($request->except('_token'))) {
      return redirect()->route('cidade.index')->with('success', 'Cidade cadastrada com sucesso');
    } else {
      return redirect()->route('cidade.index')->with('error', 'Falha ao cadastrar a Cidade');
    }
  }

  /**
   * Show
   */
  public function show($id)
  {
    if (!$cidade = $this->repository->with('estado')->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.cidade.show', compact('cidade'));
  }

  /**
   * Edit
   */
  public function edit($id)
  {
    $estados = Estado::all('Iniciais', 'nome_estado', 'id');

    if (!$cidade = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.cidade.edit', compact('cidade', 'estados'));
  }

  /**
   * Update
   */
  public function update(CidadeRequest $request, $id)
  {

    if (!$cidade = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    if ($cidade->update($request->except('_token', '_method'))) {
      return redirect()->route('cidade.index')->with('success', 'Cidade editada com sucesso');
    } else {
      return redirect()->route('cidade.index')->with('error', 'Falha ao editar a Cidade');
    }
  }

  /**
   * Excluir
   */
  public function excluir($id)
  {
    $cidade = Cidade::find($id);
    if ($cidade) {
      $cidade->delete();
      return redirect()->route('cidade.index')->with('danger', 'Cidade excluída com sucesso!');
    } else {
      return redirect()->route('cidade.index')->with('error', 'Falha ao excluir a Cidade');
    }
  }
}
