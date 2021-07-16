<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrupoRequest extends FormRequest
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


    public function messages()
    {
        return [
            'nombre.required' => 'Nombre es un campo obligatorio',
            'turno.required' => 'Turno es un campo obligatorio',
            'semestre.required'  => 'Semestre es un campo obligatorio',
            'semestre.between'  => 'Semestre no valido',
            
            
            
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            "nombre"=>"min:2|max:120|required",
            "turno"=>"required",
            "semestre"=>"between:1,9|required",
        ];
    }
}
