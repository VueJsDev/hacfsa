<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Multimedia;
use Image;

class BannerController extends Controller
{
    //Comentario de prueba del proyecto en vagrant
    const MESSAGE_SUCCESS = 1;
    const MESSAGE_ERROR   = 2;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paths = $this->getbanners();
        return view('backend.banner', ['menu' => 'banner'])->with('paths', $paths);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function uploadimages(Request $request)
    {
        //PATH DE IMAGENES
        $path_img = public_path() . '/assets/frontend/images/banners/';
        $rol      = Helpers::rolusuario();
        
        foreach ($request->file('file') as $file) {
            $nombre             = $file->getClientOriginalName();
            $nombreSinExtencion = strstr($nombre, '.', true);

            if ($rol == 1) {
                $imgrenombrada = $nombreSinExtencion . 'idiomaes' . '.png';
            } elseif ($rol == 2) {
                $imgrenombrada = $nombreSinExtencion . 'idiomapt' . '.png';
            } else {
                $imgrenombrada = $nombreSinExtencion . 'idiomaen' . '.png';
            }

            Image::make($file)->save($path_img . $imgrenombrada);

            $Multimedia         = new Multimedia;
            $Multimedia->name   = $imgrenombrada;
            $Multimedia->save();

        }

        return redirect('admin/banner')
            ->with('message_type', self::MESSAGE_SUCCESS)
            ->with('message', 'EL BANNER SE AGREGÓ CORRECTAMENTE.');

    }

    public function deletebanner(Request $request)
    {
        $name      = $request->input('name');
        $images    = File::files(public_path() . '/assets/frontend/images/banners/');
        $deleteImg = array_filter($images, function ($var) use ($name) {
            return preg_match("/\b$name\b/i", $var);
        });
        //File::delete($deleteImg);
        if (File::delete($deleteImg)) {
            return 'ok';
        }
        return 'no';

    }

    public function getbanners()
    {
        $rol     = Helpers::rolusuario();
        $banners = File::files(public_path() . '/assets/frontend/images/banners');
        $paths   = [];
        foreach ($banners as $path) {
            if ($rol == 1) {
                $palabraclave   = strstr($path, 'idiomaes');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomaes') {
                    $paths[] = pathinfo($path);
                }
            } elseif ($rol == 2) {
                $palabraclave   = strstr($path, 'idiomapt');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomapt') {
                    $paths[] = pathinfo($path);
                }
            } else {
                $palabraclave   = strstr($path, 'idiomaen');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomaen') {
                    $paths[] = pathinfo($path);
                }
            }
        }
        return $paths;
    }

}
