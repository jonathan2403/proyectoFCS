<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class EditGrupoRequest extends Request
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
            'sigla' => 'alpha_num',
            'descripcion' => 'required',
            'tipo' => 'required|exists:grupo,tipo',
            'id_profesor' => 'required|exists:profesores,id'
        ];
    }
}
