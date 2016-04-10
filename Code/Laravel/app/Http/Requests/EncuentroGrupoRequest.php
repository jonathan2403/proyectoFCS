<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class EncuentroGrupoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [    'nombre_encuentro' => '/^[a-z\d_]{4,15}$/i',
                    'id_profesor' => '',
                    'tipo_grupo' => '',
                    'lugar' => '',
                    'modalidad' => '',
                    'fecha_realizacion' => '',
            //
        ];
    }
}
