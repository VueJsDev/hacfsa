<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Residencia;
use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;
use Validator;

class ResidenceController extends Controller
{
    //
    const MESSAGE_SUCCESS = 1;
    const MESSAGE_ERROR   = 2;

    public function create()
    {
        $residencias = Residencia::lists('especialidad', 'id');
        return view('evento')->with(['titulopagina' => 'Inscripción', 'residencias' => $residencias]);
    }

    public function info()
    {
        return view('frontend.evento')->with(['titulopagina' => 'Residencias ' . date('Y')]);
    }

    public function store(Request $request)
    {

        $secretKey = '6LdMvEAUAAAAAKeDC5HSEBnNfxovtA6Xjyar7tQW';
        $recaptcha = new ReCaptcha($secretKey);
        $captcha   = $request->input('g-recaptcha-response');

        $resp = $recaptcha->verify($captcha, $request->ip());
        $data = [
            'apellido'  => trim($request->input("apellido")),
            'nombre'    => trim($request->input("nombre")),
            'nrodoc'    => trim($request->input("nrodoc")),
            'domicilio' => trim($request->input("domicilio")),
            'localidad' => trim($request->input("localidad")),
            'email'     => trim($request->input("email")),
            'celular'   => trim($request->input("celular")),

        ];

        $validator = Validator::make($data, $this->rules['create'], $this->messages['create']);

        /*$validator = Validator::make($request->all(), [
        'apellido' => 'required',
        'nombre'   => 'required',
        'nrodoc' => 'required',
        'domicilio' => 'required',
        'localidad' => 'required',
        'celular' => 'required',
        'email' => 'email|required',

        ]);*/
        if (!$resp->isSuccess() || $validator->fails()) {
            return redirect('es/residencias-inscripcion')
                ->withErrors($validator)
                ->withInput()
                ->with('message_incripcion', self::MESSAGE_ERROR)
                ->with('messagein', 'ERROR EN LA INSCRIPCIÓN, VERIFIQUE LOS CAMPOS O VERIFIQUE QUE NO ES UN ROBOT.');

        } else {

            $postulant = new \App\Postulante();

            //$path = public_file() . $img->getClientOriginalName();
            $postulant->apellido = $request->apellido;
            $postulant->nombre   = $request->nombre;
            //$postulant->tipodocumento = $request->tipodocumento;
            $postulant->residencia_id   = $request->especialidad;
            $postulant->numerodocumento = $request->nrodoc;
            //$postulant->fechanacimiento = date('Y-m-d', strtotime($request->fechanac));
            $postulant->fecha_alta = date('Y-m-d');
            //$postulant->lugarnacimiento = $request->lugarnac;
            $postulant->domicilio = $request->domicilio;
            $postulant->localidad = $request->localidad;
            //$postulant->provincia     = $request->provincia;
            //$postulant->codigopostal  = $request->postal;
            //$postulant->estadocivil   = $request->estado;
            //$postulant->telefono      = $request->telefono;
            $postulant->celular = $request->celular;
            //$postulant->universidad   = $request->universidad;
            //$postulant->promediogeneral = $request->promedio;
            $postulant->email = $request->email;
            //$postulant->fotoruta   = $request->fotoruta;
            //$postulant->anioegreso   = $request->anioegreso;

            $titulo = $request->file('titulo');

            if ($postulant->save()) {
                return redirect('es/residencias-inscripcion')
                    ->with('message_incripcion', self::MESSAGE_SUCCESS)
                    ->with('messagein', 'SU  INSCRIPCIÓN SE HA GUARDADO CORRECTAMENTE.');
            } else {
                return redirect('es/residencias-inscripcion')->with('error', true)
                    ->with('message_incripcion', self::MESSAGE_ERROR)
                    ->with('messagein', 'SU INSCRIPCIÓN NO SE GUARDO, INTENTE NUEVAMENTE.');
            }

        }
    }

    public function getFile($type, $name)
    {
        $files = [
            'declaracion' => 'DECLARACION-JURADA.doc',
            'nota'        => 'NOTA-DR.doc',
            'lista'       => 'CONDICIONES-DE-INGRESO.pdf',
        ];

        $names = [
            'declaracion' => 'Declaracion-jurada-HAC.doc',
            'nota'        => 'Nota-HAC.doc',
            'lista'       => 'Condiciones-Ingreso-HAC.pdf',
        ];

        $contents = [
            'word' => ['Content-Type: application/msword'],
            'pdf'  => ['Content-Type: application/pdf'],
        ];

        $file    = public_path() . '/downloads/' . $files[$name];
        $headers = $contents[$type];

        return response()->download($file, $names[$name], $headers);
    }

    public $rules = [
        'create' => [
            'apellido'  => 'required',
            'nombre'    => 'required',
            'nrodoc'    => 'numeric|required',
            'domicilio' => 'required',
            'localidad' => 'required',
            'celular'   => 'numeric|required',
            'email'     => 'email|required',

        ],

    ];

    public $messages = [
        'create' => [
            'nombre.required'    => 'Tu nombre es obligatorio.',
            'apellido.required'  => 'Tu apellido es obligatorio.',
            'nrodoc.required'    => 'Tu dni es obligatorio.',
            'nrodoc.numeric'     => 'Este campo acepta solo números.',
            'domicilio.required' => 'Tu domicilio es obligatorio.',
            'localidad.required' => 'Tu localidad es obligatorio.',
            'celular.required'   => 'Tu celular es obligatorio.',
            'celular.numeric'    => 'Este campo acepta solo números.',
            'email.email'        => 'Por favor respeta el formato del correo.',
            'email.required'     => 'El correo es obligatorio',

        ],

    ];

}
