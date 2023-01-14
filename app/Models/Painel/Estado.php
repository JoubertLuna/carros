<?php

namespace App\Models\Painel;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['nome_estado', 'Iniciais'];

  // Relacionamentos
  public function cidades()
  {
    return $this->hasMany(Cidade::class);
  }
}
