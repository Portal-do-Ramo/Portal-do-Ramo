<?php

namespace App\Http\Requests\Psi;

use App\Traits\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class AddProjetoPsiRequest extends FormRequest
{
    use ApiRequest;

    public function rules()
    {
        return [
            'projeto' => 'bail|required|exists:projetos,nome_projeto_slug',
            'areas_vagas' => 'required', //Campo das áreas
            'areas_vagas.*' => 'bail|required|integer' //Campo das vagas
        ];
    }

    public function messages()
    {
        return [
            'exists' => 'O campo :attribute está indicando um :attribute que não existe no sistema.'
        ];
    }
}
