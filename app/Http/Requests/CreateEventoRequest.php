<?php

namespace FCS\Http\Requests;

use FCS\Http\Requests\Request;

class CreateEventoRequest extends Request
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
            'fecha' => 'date|required',
            'numero_consejo' => 'required|numeric',
            'nombre_evento' => 'required|regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ0-9\-! ,\'\"\/@\.:\(\)]+$/',
            'descripcion_evento' => 'regex:/^[A-Za-zñÑáéíóúÁÉÍÓÚ0-9\-! ,\'\"\/@\.:\(\)]+$/',
            'id_tipoeventos' => 'required|exists:tipo_eventos,id',
            'pais' => '',
            'lugar' => '',
            'viaticos' => '',
            'horas_certificadas' => '',
        ];
    }
}
