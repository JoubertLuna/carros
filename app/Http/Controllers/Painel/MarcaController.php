<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\MarcaRequest;
use App\Models\Painel\Marca;

class MarcaController extends Controller
{
  private $repository;

  public function __construct(Marca $marca)
  {
    $this->repository = $marca;
  }

  /**
   * index
   */
  public function index()
  {
    $marcas = $this->repository->latest()->paginate();
    return view('painel.pages.marca.index', compact('marcas'));
  }

  /**
   * Create
   */
  public function create()
  {
    return view('painel.pages.marca.create');
  }

  /**
   * Store
   */
  public function store(MarcaRequest $request)
  {
    if ($this->repository->create($request->except('_token'))) {
      return redirect()->route('marca.index')->with('success', 'Marca cadastrada com sucesso');
    } else {
      return redirect()->route('marca.index')->with('error', 'Falha ao cadastrar a Marca');
    }
  }

  /**
   * Show
   */
  public function show($id)
  {
    if (!$marca = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }
    return view('painel.pages.marca.show', compact('marca'));
  }

  /**
   * Edit
   */
  public function edit($id)
  {
    if (!$marca = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.marca.edit', compact('marca'));
  }

  /**
   * Update
   */
  public function update(MarcaRequest $request, $id)
  {

    if (!$marca = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    if ($marca->update($request->except('_token', '_method'))) {
      return redirect()->route('marca.index')->with('success', 'Marca editada com sucesso');
    } else {
      return redirect()->route('marca.index')->with('error', 'Falha ao editar a Marca');
    }
  }

  /**
   * Excluir
   */
  public function excluir($id)
  {
    $marca = Marca::find($id);
    if ($marca) {
      $marca->delete();
      return redirect()->route('marca.index')->with('danger', 'Marca excluída com sucesso!');
    } else {
      return redirect()->route('marca.index')->with('error', 'Falha ao excluir a Marca');
    }
  }

  /**
   * Veiculo por Marca
   */
  public function veiculos($id)
  {
    if (!$marca = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    $veiculos = $marca->veiculos()->get();

    return view('painel.pages.marca.veiculo', compact('marca', 'veiculos'));
  }
}
