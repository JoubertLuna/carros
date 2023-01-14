<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\TestemunhoRequest;
use App\Models\Painel\Testemunho;
use Illuminate\Support\Facades\Storage;

class TestemunhoController extends Controller
{
  private $repository;

  public function __construct(Testemunho  $testemunho)
  {
    $this->repository = $testemunho;
  }

  /**
   * Index
   */
  public function index()
  {
    $testemunhos = $this->repository->latest()->paginate();
    return view('painel.pages.testemunho.index', compact('testemunhos'));
  }

  /**
   * Create
   */
  public function create()
  {
    return view('painel.pages.testemunho.create');
  }

  /**
   * Store
   */
  public function store(TestemunhoRequest $request)
  {
    if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
      $nome_imagem = $request->imagem->getClientOriginalName();
      $request->imagem->storeAs('testemunhos', $nome_imagem);
    } else {
      $nome_imagem = 'semtestemunho.png';
    }

    $data = $request->except('_token');
    $data['imagem'] = $nome_imagem;

    if ($this->repository->create($data)) {
      return redirect()->route('testemunho.index')->with('success', 'Testemunho cadastrado com sucesso');
    } else {
      return redirect()->route('testemunho.index')->with('error', 'Falha ao cadastrar o Testemunho');
    }
  }

  /**
   * Show
   */
  public function show($id)
  {
    if (!$testemunho = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.testemunho.show', compact('testemunho'));
  }

  /**
   * Edit
   */
  public function edit($id)
  {
    if (!$testemunho = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    return view('painel.pages.testemunho.edit', compact('testemunho'));
  }

  /**
   * Update
   */
  public function update(TestemunhoRequest $request, $id)
  {

    if (!$testemunho = $this->repository->where('id', $id)->first()) {
      return redirect()->back();
    }

    //Update de Imagem
    if ($request->imagem) {
      if ($testemunho->imagem && Storage::exists($testemunho->imagem)) {
        Storage::delete($testemunho->imagem);
      }
      $nome_imagem_edit = $request->imagem->getClientOriginalName();
      $request->imagem->storeAs('testemunhos', $nome_imagem_edit);
    } elseif ($request->imagem === null) {
      $nome_imagem_edit = $testemunho['imagem'];
    } else {
      $nome_imagem_edit = 'semtestemunho.png';
    }
    //Update de Imagem

    $testemunho->nome_autor = $request->input('nome_autor');
    $testemunho->profissao_autor = $request->input('profissao_autor');
    $testemunho->descricao = $request->input('descricao');
    $testemunho->ativo = $request->input('ativo');
    $testemunho->imagem = @$nome_imagem_edit;
    $testemunho->update();

    if ($testemunho) {
      return redirect()->route('testemunho.index')->with('success', 'Testemunho editado com sucesso');
    } else {
      return redirect()->route('testemunho.index')->with('error', 'Falha ao editar o Testemunho');
    }
  }

  /**
   * Excluir
   */
  public function excluir($id)
  {
    $testemunho = Testemunho::find($id);
    if ($testemunho) {
      $testemunho->delete();
      return redirect()->route('testemunho.index')->with('danger', 'Testemunho excluído com sucesso!');
    } else {
      return redirect()->route('testemunho.index')->with('error', 'Falha ao excluir o Testemunho');
    }
  }
}
