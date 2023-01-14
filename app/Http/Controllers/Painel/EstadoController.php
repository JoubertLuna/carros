<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\EstadoRequest;
use App\Models\Painel\Estado;

class EstadoController extends Controller
{
  private $repository;

  public function __construct(Estado $estado)
  {
    $this->repository = $estado;
  }

  /**
   * index
   */
  public function index()
  {
    $estados = $this->repository->latest()->paginate(27);
    return view('painel.pages.estado.index', compact('estados'));
  }

  /**
   * Create
   */
  public function create()
  {
    return view('painel.pages.estado.create');
  }

  /**
   * Store
   */
  public function store(EstadoRequest $request)
  {
    if ($this->repository->create($request->except('_token'))) {
      return redirect()->route('estado.index')->with('success', 'Estado cadastrado com sucesso');
    } else {
      return redirect()->route('estado.index')->with('error', 'Falha ao cadastrar o Estado');
    }
  }

  /**
   * Show
   */
  public function show($id)
  {
    if (!$estado = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }
    return view('painel.pages.estado.show', compact('estado'));
  }

  /**
   * Edit
   */
  public function edit($id)
  {
    if (!$estado = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.estado.edit', compact('estado'));
  }

  /**
   * Update
   */
  public function update(EstadoRequest $request, $id)
  {

    if (!$estado = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    if ($estado->update($request->except('_token', '_method'))) {
      return redirect()->route('estado.index')->with('success', 'Estado editado com sucesso');
    } else {
      return redirect()->route('estado.index')->with('error', 'Falha ao editar o Estado');
    }
  }

  /**
   * Excluir
   */
  public function excluir($id)
  {
    $estado = Estado::find($id);
    if ($estado) {
      $estado->delete();
      return redirect()->route('estado.index')->with('danger', 'Estado excluído com sucesso!');
    } else {
      return redirect()->route('estado.index')->with('error', 'Falha ao excluir o Estado');
    }
  }

  /**
   * Veiculo por Cidades
   */
  public function cidades($id)
  {
    if (!$estado = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    $cidades = $estado->cidades()->get();

    return view('painel.pages.estado.cidade', compact('estado', 'cidades'));
  }
}
