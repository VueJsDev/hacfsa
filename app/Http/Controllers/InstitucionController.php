<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\Insthistoria;
use Illuminate\Http\Request;

class InstitucionController extends Controller
{
    const MESSAGE_SUCCESS = 1;
    const MESSAGE_ERROR   = 2;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

/*Esta funcion recibe el contenido del textara de historia
y la guarda en la base de datos en un registro unico

 */
    public function store(Request $request)
    {
        $rol = Helpers::rolusuario();

        if ($rol == 1) {
            $insthistoria = Insthistoria::find(0);
            if (is_null($insthistoria)) {
                $insthistoria     = new Insthistoria;
                $insthistoria->id = 0;
            }
        } elseif ($rol == 2) {

            $insthistoria = Insthistoria::find(1);

            if (is_null($insthistoria)) {
                $insthistoria     = new Insthistoria;
                $insthistoria->id = 1;
            }

        } else {
            $insthistoria = Insthistoria::find(2);
            if (is_null($insthistoria)) {
                $insthistoria     = new Insthistoria;
                $insthistoria->id = 2;
            }
        }

        $this->validate($request, [

            'contenidohistoria' => 'required',

        ]);

        //capto el dato del imput

        $insthistoria->contenido = trim($request->input("contenidohistoria"));

        $insthistoria->save();

        return redirect('admin/sections')
            ->with('message_typeinsthistoria', self::MESSAGE_SUCCESS)
            ->with('messagehistoria', 'LA HISTORIA SE A GUARDADO CORRECTAMENTE.')
            ->with('activarseccion', 'institucion')
            ->with('activarinstitucion', 'insthistoria');

    }

}
