<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class CreatePublicacionRequest extends Request
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
          'descripcion' => 'required|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ0-9\-! ,\'\"\/@\.:\(\)]+$/',
          //'tipo' => 'required|in:"ri","re","li"',
          //'id_proyecto' => 'required|exists:proyecto,id'
        ];
    }
}
