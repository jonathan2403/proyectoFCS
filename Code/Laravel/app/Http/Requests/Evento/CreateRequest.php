<?php namespace FCS\Http\Requests\Evento;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {

	public function rules()
    {
        return [

                'numero_consejo'            =>      'required|unique:eventos,numero_consejo',
               // 'fecha'                     =>      'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

}
