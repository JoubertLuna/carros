<?php

namespace App\Models\Painel;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['marca_id', 'nome_veiculo', 'qty_passageiros', 'qty_lugares', 'qty_portas', 'class', 'descricao', 'imagem', 'ativo'];

  #Relecionamentos
  public function marca()
  {
    return $this->belongsTo(Marca::class);
  }
}