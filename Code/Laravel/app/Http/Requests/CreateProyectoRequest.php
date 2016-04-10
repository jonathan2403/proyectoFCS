<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class CreateProyectoRequest extends Request
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
            'titulo_proyecto' => 'required|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ0-9\-! ,\'\"\/@\.:\(\)]+$/'
        ];
    }
}
