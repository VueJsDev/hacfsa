<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MailRequest extends Request
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
            'name'      => 'required',
            'email'     => 'email|required',
            'title'     => 'required',
            'messaje'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'Tu nombre es obligatorio.',
            'email.email'       => 'Por favor respeta el formato del correo.',
            'email.required'    => 'El correo es obligatorio',
            'title.required'    => 'Agrega un titulo al mensaje',
            'messaje.required'  => 'Faltó agregar tu mensaje'
        ];
    }
}
