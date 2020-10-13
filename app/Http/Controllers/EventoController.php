<?php

namespace App\Http\Controllers;

use App\Evento as Inscripto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;
use Validator;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.evento_form', ['titulopagina' => 'X Simposio Internacional de Enfermería']);
    }

    public function store(Request $request)
    {
        $secretKey = '6Le4URwTAAAAAIxZMZz8sMhFiQa4NmskX9jLwhoe';
        $recaptcha = new ReCaptcha($secretKey);
        $captcha   = $request->input('g-recaptcha-response');

        $resp = $recaptcha->verify($captcha, $request->ip());

        $validator = Validator::make($request->all(), [
            'apellido' => 'required',
            'especial' => 'required',
            'dni'      => 'required',
            'work'     => 'required',
            'ciudad'   => 'required',
            'mail'     => 'required|email',
        ]);

        if (!$resp->isSuccess() || $validator->fails()) {
            echo 'errror';
            return redirect('es/eventos/jornada-de-enfermeria')
                ->withErrors($validator)
                ->withInput()
                ->with('status', 'error');
        } else {

            $inscripto = new Inscripto();
            //$inscripto->event      = $request->evento;
            $inscripto->name       = $request->apellido;
            $inscripto->speciality = $request->especial;
            $inscripto->DNI        = $request->dni;
            $inscripto->workplace  = $request->work;
            $inscripto->city       = $request->ciudad;
            $inscripto->mail       = $request->mail;
            $inscripto->save();

            return redirect('es/eventos/jornada-de-enfermeria')->with('status', 'ok');
            /*
        $table->string('speciality', 50);
        $table->string('DNI', 8);
        $table->string('workplace', 50);
        $table->string('city', 50);
        $table->string('mail', 50);
         */
        }

    }

    public function getFile($type, $name)
    {
        $files = [
            'programa' => 'programa-enfermeria.pdf',
        ];

        $names = [
            'programa' => 'programa-enfermeria.pdf',
        ];

        $contents = [
            'pdf' => ['Content-Type: application/pdf'],
        ];

        $file    = public_path() . '/downloads/' . $files[$name];
        $headers = $contents[$type];

        return response()->download($file, $names[$name], $headers);
    }
}
