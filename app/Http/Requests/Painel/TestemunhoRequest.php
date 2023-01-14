<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TestemunhoRequest extends FormRequest
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
      'nome_autor' => "required|min:3|max:255|unique:testemunhos,nome_autor,{$id},id",
      'profissao_autor' => 'required|min:3|max:255',
      'imagem' => 'nullable|max:2048|',
      'descricao' => 'required|min:10|max:255',
      'ativo' => 'required', Rule::in(['S', 'N']),
    ];
  }
}
