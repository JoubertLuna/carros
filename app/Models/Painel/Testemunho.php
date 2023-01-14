<?php

namespace App\Models\Painel;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testemunho extends Model
{
  use HasFactory, UuidTrait;

  public $incrementing = false;
  protected $keyType = 'uuid';

  protected $fillable = ['nome_autor', 'profissao_autor', 'imagem', 'descricao', 'ativo'];
}
