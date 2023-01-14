<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class EstadoRequest extends FormRequest
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
      'nome_estado' => "required|string|min:3|max:255|unique:estados,nome_estado,{$id},id",
      'Iniciais' => "required|string|min:2|max:2|unique:estados,Iniciais,{$id},id",
    ];
  }
}
