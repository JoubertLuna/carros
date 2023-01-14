<?php

namespace App\Models\Painel;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['estado_id', 'nome_cidade', 'zip_code'];

  // Relacionamentos
  public function estado()
  {
    return $this->belongsTo(Estado::class);
  }
}
