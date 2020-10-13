<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InscripcionRequest extends Request
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
        return [
            'apellido' => 'required',
            'nombre'   => 'required',
            'nrodoc' => 'numeric|required',
            'domicilio' => 'required',
            'localidad' => 'required',
            'celular' => 'numeric|required',
            'email' => 'email|required',
            
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'     => 'Tu nombre es obligatorio.',
            'apellido.required'     => 'Tu apellido es obligatorio.',
            'nrodoc.required'     => 'Tu dni es obligatorio.',
            'nrodoc.numeric'     => 'Este campo acepta solo números.',
            'domicilio.required'     => 'Tu domicilio es obligatorio.',
            'localidad.required'     => 'Tu localidad es obligatorio.',
            'celular.required'     => 'Tu celular es obligatorio.',
            'celular.numeric'     => 'Este campo acepta solo números.',
            'email.email'       => 'Por favor respeta el formato del correo.',
            'email.required'    => 'El correo es obligatorio',
            

            
        ];
    }
}
