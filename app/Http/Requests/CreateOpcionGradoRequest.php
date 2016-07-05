<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class CreateOpcionGradoRequest extends Request
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
            'descripcion' => '',
            'id_supervisor' => '',            
            //'id_director' => 'required|exists:profesores,id'
        ];
    }
}
