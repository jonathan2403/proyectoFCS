<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class CreateGrupoRequest extends Request
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
            'sigla' => '',
            'descripcion' => 'required|unique:grupo,descripcion|max:150',
            'tipo' => 'required|in:"i","e"',
            'id_profesor' => 'required|exists:profesores,id'
        ];
    }
}
