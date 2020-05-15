<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cedula'=>'integer|numeric|nullable',
            'nombre'=>'required|alpha|min:2|max:255',
            'apellido'=>'required|alpha|min:4|max:255',
            'celular'=>'integer|numeric|nullable',
            'direccion'=>'required|min:10|max:255',
            'correo'=>'required|email:rfc',
        ];
    }


    public function attributes()
    {
        return [
            'cedula'=>'Cedula',
            'nombre'=>'Nombre',
            'apellido'=>'Apellido',
            'celular'=>'Celular',
            'direccion'=>'Direccion',
            'correo'=>'Correo Electronico',
        ];
    }

    public function messages()
    {
        return [
            'cedula.integer'=>'La :attribute Es Requerida',
            'cedula.numeric'=>'La :attribute Debe Ser Solo Numero',

            'nombre.required'=>'El :attribute Debe Ser Ingresado',
            'nombre.min'=>'El :attribute Debe Tener Mas De 2 Caracteres',
            'nombre.max'=>'El :attribute No Debe Tener Mas De 255 Caracteres',
            'nombre.alpha'=>'El :attribute Debe Tener Unicamente Letras',

            'apellido.required'=>'El :attribute Debe Ser Ingresado',
            'apellido.min'=>'El :attribute Debe Tener Mas De 4 Caracteres',
            'apellido.max'=>'El :attribute No Debe Tener Mas De 255 Caracteres',
            'apellido.alpha'=>'El :attribute Debe Tener Unicamente Letras',

            'celular.integer'=>'El :attribute Es Requerida',
            'celular.numeric'=>'El :attribute Debe Ser Solo Numero',

            'direccion.required'=>'La :attribute Debe Ser Ingresado',
            'direccion.min'=>'La :attribute Debe Tener Mas De 6 Caracteres',
            'direccion.max'=>'La :attribute No Debe Tener Mas De 255 Caracteres',

            'correo.required'=>'El :attribute Es Requerido',
            'correo.email'=>'El :attribute Formato Incorrecto',
            'correo.unique'=>'El :attribute Ya Existe',

        ];
    }


}
