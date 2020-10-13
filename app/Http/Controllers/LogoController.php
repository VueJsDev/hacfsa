<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class LogoController extends Controller
{
    const MESSAGE_SUCCESS = 1;
    const MESSAGE_ERROR   = 2;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paths = $this->getlogo();

        return view('backend.logo', ['menu' => 'logo'])->with('paths', $paths);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function uploadlogo(Request $request)
    {
        //PATH DE IMAGENES
        $path_img = public_path() . '/assets/frontend/images/imgsecciones/';
        foreach ($request->file('file') as $file) {

            $imgrenombrada = 'logo' . '.png';

            Image::make($file)->save($path_img . $imgrenombrada);
        }

        return redirect('admin/logo')
            ->with('message_type', self::MESSAGE_SUCCESS)
            ->with('message', 'EL LOGO SE AGREGÓ CORRECTAMENTE.');

    }

    public function deletelogo(Request $request)
    {
        $name      = $request->input('name');
        $images    = File::files(public_path() . '/assets/frontend/images/imgsecciones/');
        $deleteImg = array_filter($images, function ($var) use ($name) {
            return preg_match("/\b$name\b/i", $var);
        });
        //File::delete($deleteImg);
        if (File::delete($deleteImg)) {
            return 'ok';
        }
        return 'no';

    }

    public function getlogo()
    {
        $logo  = File::files(public_path() . '/assets/frontend/images/imgsecciones');
        $paths = [];
        foreach ($logo as $path) {
            $paths[] = pathinfo($path);
        }
        return $paths;
    }

}
