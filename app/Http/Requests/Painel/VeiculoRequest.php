<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VeiculoRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules()
  {
    $id = $this->segment(2);

    return [
      'nome_veiculo' => "required|min:3|max:255|unique:veiculos,nome_veiculo,{$id},id",
      'class' => 'required', Rule::in(['gasolina', 'alcool', 'diesel', 'flex']),
      'qty_passageiros' => 'required|integer|min:1|max:30',
      'qty_lugares' => 'required|integer|min:4|max:30',
      'qty_portas' => 'required|integer|min:2|max:4',
      'ativo' => 'required', Rule::in(['S', 'N']),
      'imagem' => 'nullable|max:2048|',
      'marca_id' => 'required|exists:marcas,id',
      'descricao' => 'nullable|min:3|max:255'
    ];
  }
}
