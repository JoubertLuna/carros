<?php

namespace App\Models\Painel;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['marca'];

  // Relacionamentos
  public function veiculos()
  {
    return $this->hasMany(Veiculo::class);
  }
}
