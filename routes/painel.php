<?php

use App\Http\Controllers\Painel\{
  CidadeController,
  EstadoController,
  HomeController,
  MarcaController,
  TestemunhoController,
  VeiculoController,
};
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

  #Route Home
  Route::get('/home', [HomeController::class, 'index'])->name('home');
  #Route Home

  #Route Marca
  Route::get('marca/{id}/veiculo', [MarcaController::class, 'veiculos'])->name('marca.veiculo');
  Route::get('marca/excluir/{id}', [MarcaController::class, 'excluir'])->name('marca.excluir');
  Route::resource('marca', MarcaController::class);
  #Route Marca

  #Route Veiculo
  Route::get('veiculo/excluir/{id}', [VeiculoController::class, 'excluir'])->name('veiculo.excluir');
  Route::resource('veiculo', VeiculoController::class);
  #Route Veiculo

  #Route Testemunho
  Route::get('testemunho/excluir/{id}', [TestemunhoController::class, 'excluir'])->name('testemunho.excluir');
  Route::resource('testemunho', TestemunhoController::class);
  #Route Testemunho

  #Route Estado
  Route::get('estado/{id}/cidade', [EstadoController::class, 'cidades'])->name('estado.cidade');
  Route::get('estado/excluir/{id}', [EstadoController::class, 'excluir'])->name('estado.excluir');
  Route::resource('estado', EstadoController::class);
  #Route Estado

  #Route Cidade
  Route::get('cidade/excluir/{id}', [CidadeController::class, 'excluir'])->name('cidade.excluir');
  Route::resource('cidade', CidadeController::class);
  #Route Cidade

});
