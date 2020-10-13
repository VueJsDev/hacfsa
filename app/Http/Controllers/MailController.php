<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Validator;

class MailController extends Controller
{
    const MESSAGE_SUCCESS = 1;
    const MESSAGE_ERROR   = 2;

    public function sendcontact(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|captcha',
            'name'                 => 'required',
            'email'                => 'required|email',
            'message'              => 'required',
        ]);

        if ($validate->fails()) {
            $request->session()->flash('message_type', self::MESSAGE_ERROR);
            $request->session()->flash('message', 'ERROR EN EL ENVÍO DEL CORREO, VERIFIQUE LOS DATOS.');

            return redirect('/')
                ->withErrors($validate)
                ->withInput();
        }

        $data = ['nombre' => $request->name, 'tele' => $request->phone, 'correo' => $request->email, 'mensaje' => $request->message];

        Mail::send('emails.contacto', $data, function ($message) use ($data) {
            $message->to('teojuan46@gmail.com')->cc('jorgeneumo@gmail.com')->bcc('wgerez@gmail.com')->subject('Contacto desde SOMERNEA');
        });

        /*Mail::send( 'emails.contacto', $data, function( $message ) use ($data)
        {
        $message->to( 'wgerez@gmail.com' )->subject( 'Contacto desde SOMERNEA' );
        });*/

        $request->session()->flash('message_type', self::MESSAGE_SUCCESS);
        $request->session()->flash('message', 'GRACIAS POR SU CONTACTO, LE RESPONDEREMOS A LA BREVEDAD POSIBLE.');
        return redirect('/');
    }
}
