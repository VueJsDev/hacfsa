<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\ImagenPublicacion as Imagenpublicacion;
use App\Publicacion as Publication;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class ImagesController extends Controller
{

    public function postUploadimages(Request $request)
    {
        //PATH DE IMAGENES
        $path_img      = public_path() . '/uploads/';
        $path_imgthumb = public_path() . '/uploads/thumbs/';

        $id = $request->input('publicId');

        $editor = Sentinel::getUser()->toArray();

        foreach ($request->file('file') as $file) {

            $randomname = $id . '_' . Helpers::generateRandomString(rand(15, 30)) . '.png';
            $img        = Image::make($file)->save($path_img . $randomname);

            $imgthumbs = Image::make($file)->fit(450)->save($path_imgthumb . $randomname);

            $img = new Imagenpublicacion();

            $img->publicacion_id = $id;
            $img->descripcion    = $randomname;
            $img->ruta           = '/uploads/' . $randomname;
            $img->usuario_alta   = $editor['username'];
            $img->fecha_alta     = date('Y-m-d H:i:s');
            $img->save();
        }

    }

    public function getImagespublication(Request $request)
    {
        $idpublic = $request->input('id');

        $images = Publication::findOrFail($idpublic)->imagenespublicaciones;
        //$images      = $publication->imagenespublicaciones;

        return $images;

    }

    public function postDeleteimgpublic(Request $request)
    {

        $img = Imagenpublicacion::find((int) $request->input('id'));

        if ($img->delete()) {

            $images     = File::files(public_path() . '/uploads');
            $searchFile = $img->descripcion;
            $deleteImg  = array_filter($images, function ($var) use ($searchFile) {
                return preg_match("/\b$searchFile\b/i", $var);
            });

            File::delete($deleteImg);
            return (int) $request->input('id');
        } else {
            return 'false';
        }

    }
}
