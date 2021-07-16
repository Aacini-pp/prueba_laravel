<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
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
            'apellidos.required' => 'Nombre es un campo obligatorio',
            'edad.required'  => 'Edad es un campo obligatorio',
            'email.required'  => 'Correo es un campo obligatorio',
            'email.unique'  => 'Este correo ya fue reguistrado',
            'telefono.unique'  => 'Telefono es un campo obligatorio',
            
            
        ];
    }


    /**
     * Get the validation rules that apply to the request.
     *
    
     * 
     * @return array
     */
    public function rules()
    {
        return [
            //
                "nombre"=>"min:2|max:120|required",
                "apellidos"=>"min:5|max:120|required",
                "edad"=>"between:0,100|required",
                "email"=>"min:5|max:120|required|email:rfc,dns|unique:alumnos",
                "telefono"=>"min:2|max:15|required",
                


        ];
    }

    


    
}
