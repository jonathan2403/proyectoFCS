<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class CreateEntidadRequest extends Request
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
            'nombre_entidad' => '/^[a-z\d_]{4,28}$/i',
            'correo' => '',
            'area_conocimiento' => '',
            'nivel_estudio' => '',
            'experiencia' => '',
            'telefono' => '^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$',
            'direccion' => '',
        ];
    }
}
