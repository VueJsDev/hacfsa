<?php

namespace App\Http\Controllers;

use App\Healthvideo;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class TelesaludController extends Controller
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

    /*Esta funcion recibe la imagen de la vista seccion y la guarda
    en la carpeta de imagen telesalud
     */
    public function uploadimgsections(Request $request)
    {

        //PATH DE IMAGENES
        $path_img = public_path() . '/assets/frontend/images/imgsecciones/imgtelesalud/';

        $rol = Helpers::rolusuario();

        foreach ($request->file('file') as $file) {
            if ($rol == 1) {
                $imgrenombrada = 'idiomaes' . Helpers::generateRandomString(rand(15, 30)) . '.png';
            } elseif ($rol == 2) {
                $imgrenombrada = 'idiomapt' . Helpers::generateRandomString(rand(15, 30)) . '.png';
            } else {
                $imgrenombrada = 'idiomaen' . Helpers::generateRandomString(rand(15, 30)) . '.png';
            }

            Image::make($file)->save($path_img . $imgrenombrada);
        }

        return "okkk";

    }

/*Esta funcion elimina imagen de la vista seccion y de
la carpeta de imagen telesalud

 */

    public function deleteimgsections(Request $request)
    {
        $name      = $request->input('name');
        $images    = File::files(public_path() . '/assets/frontend/images/imgsecciones/imgtelesalud/');
        $deleteImg = array_filter($images, function ($var) use ($name) {
            return preg_match("/\b$name\b/i", $var);
        });
        //File::delete($deleteImg);
        if (File::delete($deleteImg)) {
            return 'ok';
        }
        return 'no';

    }

/*Esta funcion recibe el enlace del video
y la guarda en la base de datos en un registro unico

 */
    public function store(Request $request)
    {

        $healthvideo = Healthvideo::find(1);

        $this->validate($request, [

            'enlace' => 'required',

        ]);

        //capto el dato del imput
        $enlaceyoutube = trim($request->input("enlace"));
        //substr me devuelve una cantidad de caracteres en este caso empiezo desde
        //la linea 32 en adelante
        $enlaceacortado = substr($enlaceyoutube, 17);

        $healthvideo->url = $enlaceacortado;

        $healthvideo->save();

        return redirect('admin/sections')
            ->with('message_typevideo', self::MESSAGE_SUCCESS)
            ->with('messagevideo', 'EL VIDEO SE A GUARDADO CORRECTAMENTE.')
            ->with('activarseccion', 'telesalud')
            ->with('activartelesalud', 'telesaludvideo');

    }

}
