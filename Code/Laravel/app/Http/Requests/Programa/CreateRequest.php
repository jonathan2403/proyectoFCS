<?php 
namespace FCS\Http\Requests\Programa;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest {

    public function rules()
    {
        return [

                'nombre_programa' => ['required','min:5','max:45']
               // 'fecha'                     =>      'required',
        ];
    }

    public function authorize()
    {
        return true;
    }

}
