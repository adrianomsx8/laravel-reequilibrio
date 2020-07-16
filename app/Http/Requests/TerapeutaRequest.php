<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TerapeutaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'telefone' => 'required', 
            'email' => 'required', 
            'foto' => 'required', 
            'especialidade' => 'required', 
            'descricao' => 'required',
            'cidade' => 'required',
            'estado' => 'required', 
            'endereco' => 'required', 
            'formacao' => 'required'
  
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Campo nome é obrigatório!',
            'telefone.required' => 'Campo telefone é obrigatório!', 
            'email.required' => 'Campo e-mail é obrigatório!', 
            'foto.required' => 'Campo foto é obrigatório!', 
            'especialidade.required' => 'Campo especialidade é obrigatório!', 
            'descricao.required' => 'Campo descrição é obrigatório!',
            'cidade.required' => 'Campo cidade é obrigatório!',
            'estado.required' => 'Campo estado é obrigatório!', 
            'endereco.required' => 'Campo endereço é obrigatório!', 
            'formacao.required' => 'Campo formação é obrigatório!',
            '*.min' => 'Quantidade minima de caracteres é 3'
        ]
        ;
    }
}
