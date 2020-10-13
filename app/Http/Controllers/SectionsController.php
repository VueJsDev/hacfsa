<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\Insthistoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SectionsController extends Controller
{

    public function index()
    {
        $contenidohistoria = $this->gethistoria();
        $pathsimg          = $this->getimgsections();
        return view('backend.sections', ['menu' => 'sections'])
            ->with('contenidohistoria', $contenidohistoria)
            ->with('imgsecciones', $pathsimg);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function gethistoria()
    {
        if (is_null(Insthistoria::find(0))) {
            return '';
        }
        $contenidohistoria = Insthistoria::find(0);

        return $contenidohistoria->contenido;

    }

    public function getimgsections()
    {
        $rol        = Helpers::rolusuario();
        $Imgsection = File::files(public_path() . '/assets/frontend/images/imgsecciones/imgtelesalud/');
        $pathsimg   = [];
        foreach ($Imgsection as $pathimg) {
            if ($rol == 1) {
                $palabraclave   = strstr($pathimg, 'idiomaes');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomaes') {
                    $pathsimg[] = pathinfo($pathimg);
                }
            } elseif ($rol == 2) {
                $palabraclave   = strstr($pathimg, 'idiomapt');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomapt') {
                    $pathsimg[] = pathinfo($pathimg);
                }
            } else {
                $palabraclave   = strstr($pathimg, 'idiomaen');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomaen') {
                    $pathsimg[] = pathinfo($pathimg);
                }
            }
        }

        return $pathsimg;
    }

}
