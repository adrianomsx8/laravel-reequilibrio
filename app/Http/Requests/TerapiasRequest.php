<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TerapiasRequest extends FormRequest
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
            'terapia' => 'required|min:3',
            'descricao' => 'required|min:3',
            'foto' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'terapia.required' => 'Campo terapia é obrigatório!',
            'descricao.required' => 'Campo descrição é obrigatório!',
            'foto.required' => 'Campo foto é obrigatório!',
            '*.min' => 'Quantidade minima de caracteres é 3'
        ];
    }
}
