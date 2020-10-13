<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Healthvideo;
use App\Http\Controllers\Controller;
use App\ImagenPublicacion;
use App\Insthistoria;
use App\Publicacion as Publication;
use App\Residencia;
use App\Servicio;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Mail;
use ReCaptcha\ReCaptcha;
use Carbon\Carbon;

class FrontendController extends Controller
{
    const MESSAGE_SUCCESS = 1;
    const MESSAGE_ERROR   = 2;
    const MESSAGE_INFO    = 3;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('lang');
    }

    public function index()
    {
        $idioma    = $this->getIdioma();
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();

        $lastnews = Publication::limit(1)
            ->where('publicar', 1)
            ->where('idioma', $idioma)
            ->orderBy('fecha_alta', 'DESC')
            ->first();

        return view('frontend.index')
            ->with('lastnews', $lastnews)
            ->with('titulopagina', 'inicio')
            ->with('paths', $paths)
            ->with('pathslogo', $pathslogo);
    }

    public function lastnews()
    {

        $idioma   = $this->getIdioma();
        $paths    = $this->getbanners();
        $lastnews = Publication::limit(1)
            ->where('publicar', 1)
            ->where('idioma', $idioma)
            ->orderBy('fecha_alta', 'desc')
            ->first();
       

        if (isset($lastnews)){
            if ($idioma == "es") {
                return redirect()->route('news_es', ['seoslug' => $lastnews->slug]);

            } elseif ($idioma == "en") {
                return redirect()->route('news_en', ['seoslug' => $lastnews->slug]);
            } else {
                return redirect()->route('news_pt', ['seoslug' => $lastnews->slug]);
            }
        } else {
            if ($idioma == "es") {
                return redirect()->route('news_es');
            } elseif ($idioma == "en") {
                return redirect()->route('news_en');
            } else {
                return redirect()->route('news_pt');
            }
        }

    }

    public function trabaja_con_nosotros()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.trabaja')
            ->with('titulopagina', 'inicio')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function evento()
    {
        $paths       = $this->getbanners();
        $pathslogo   = $this->getlogo();
        $residencias = Residencia::lists('especialidad', 'id');

        return view('frontend.evento')
            ->with(['titulopagina' => 'Inscripcion', 'residencias' => $residencias])
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function teaching()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.teaching')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function fellows()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.fellows')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function rotaciones()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.rotations')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneos()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneos')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneos2017()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneos-2017')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneos2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneos-2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneos2019()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneos-2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneosmarzo19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-marzo2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneosoctubre19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-octubre2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneosjulio19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-julio2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneosjunio19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-junio2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneosmayo19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-mayo2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneosabril19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-abril2019')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneosMultidisciplinario()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneosMultidisciplinario')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function ateneoseptiembre2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneoSeptiembre2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneosagosto2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneoAgosto2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneojulio18()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneoJulio2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneoradiologico18()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneoRadiologico2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneoscardio2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-cardiologia18')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ateneosneuro2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneo-neuro18')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function neurociencias2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.neurociencias2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function capacitacion2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.capacitacion2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function uti2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ateneoUti')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function charlaEnfermeria()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.charlas-enfermeria')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function interresidencias()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.interresidencias')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function neurocirugia()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.neurocirugia')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function neurologia()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.neurologia')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function capacitacion()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.jornada-capacitacion')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function cardiologia()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.cardiologia')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function neuro()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.neuro')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function laboral()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.laboral')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function hospitalaria()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.hospitalaria')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function ginecologia()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.ginecologia')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function pediatria()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.pediatria')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function pediatria2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.pediatria2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function enfermeria()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.enfermeria')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function enfermeria2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.enfermeria2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function kinesiologia()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.kinesiologia')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function kinesiologia2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.kinesiologia2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function anestesiologia2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.anestesiologia2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function endoscopia2018()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.endoscopia2018')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function tcientifico()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.trabajocientifico')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function comites()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.comites')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function actividadDocencia()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.actividad-docencia')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function calidadAtencion()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.calidad-atencion')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function tallerPeritonitis()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.taller-peritonitis')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function biblioteca()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.biblioteca')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function teachingIntro()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.teaching-intro')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function recidence()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.recidence')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function recidentes()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.recidents')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function examenRecidentes19()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.examen-residentes19')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function examenRecidentes()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.recident-evaluation')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function semanaResidentes()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.week-of-residents')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function mantenimientoResidentes()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.residentes-mantenimiento')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function actoMantenimientoResidentes()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.acto-residentes-mantenimiento')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function masInfoRecidence()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.mas-info-recidence')
            ->with('titulopagina', 'docencia')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function sendcv(Request $request)
    {
        $path_cv = public_path() . '/uploads/';
        $request->session()->put('path', $path_cv);

        $file      = $request->file('file');
        $name_file = $file->getClientOriginalName();
        $request->session()->put('file', $name_file);
        \Storage::disk('local')->put($name_file, \File::get($file));

        $request->session()->put('mensaje', $request->input('message'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('title', $request->input('title'));

        Mail::send('emails.curriculum', ['mensaje' => session('mensaje'), 'correo' => session('email'), 'nombre' => session('name')], function ($message) {
            $message->from(session('email'), session('name'));

            $message->attach(session('path') . session('file'));

            $message->to('contacto@hacfsa.gob.ar')->cc('wgerez@gmail.com');

            $message->subject(session('title'));
        });

        return redirect(config('app.locale') . '/trabaja-con-nosotros')->with('confirm', 'ok');
    }

    public function news(Request $request)
    {
  
        $idioma    = $this->getIdioma();
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();

        if (Publication::where('slug', '=', $request->seoslug)->exists()) {
            $publication = Publication::where('slug', '=', $request->seoslug)->first();
            if ($idioma == "es") {
                $tmpurl = asset('es/noticias/' . $request->seoslug);
            } elseif ($idioma == "en") {

                $tmpurl = asset('en/news/' . $request->seoslug);
            } else {
                $tmpurl = asset('pt/noticias/' . $request->seoslug);
            }

            if ($_SERVER['HTTP_HOST'] == 'localhost:8000') {
                $url = $tmpurl;
            } else {
                $url = app('bitly')->getUrl($tmpurl);
            }
            
            $publications = Publication::limit(7)
            ->where('id', '!=', $publication->id)
            ->where('idioma', $idioma)
            ->with('imagenespublicaciones')
            ->orderBy('fecha_alta', 'desc')
            ->get();
    
            $image = ImagenPublicacion::where('publicacion_id', '=', $publication->id)
                ->orderBy('fecha_alta', 'desc')
                ->first();

            $imagePath = 'assets/frontend/images/imagennoticia.jpg';

            if (null !== $image) {
                $imagePath = $image->ruta;
            }

            /*foreach ($publications as $pub) {
                $date = $pub->fecha_alta;

                $date = Carbon::parse($pub->fecha_alta)->format('d-M-Y'); // now date is a carbon instance

                $pub->fecha_alta = $date;

            }

            dd("+++", $pub);*/
            
            return view('frontend.news')->with([
                'lastnews'     => $publication,
                'titulopagina' => 'noticias',
                'news'         => $publications,
                'imagePath'    => $imagePath,
                'paths'        => $paths,
                'pathslogo'    => $pathslogo,
                'url'          => $url,
            ]);

        } else {
            return response()->view('errors.404', [], 404);
        }
    }

    public function previusNews(Request $request)
    {
        $publication_idioma = $this->getpublicacion_porIdioma($request->seoslug);
        $idioma             = $this->getIdioma();
        $paths              = $this->getbanners();
        $pathslogo          = $this->getlogo();

        if (Publication::where('slug', '=', $publication_idioma)->exists()) {
            $publication = Publication::where('slug', '=', $publication_idioma)->first();

            if ($idioma == "en") {
                $tmpurl = asset('en/news/' . $publication_idioma);
            } else {
                $tmpurl = asset('pt/noticias/' . $publication_idioma);
            }

            if ($_SERVER['HTTP_HOST'] == 'localhost:8000') {
                $url = $tmpurl;
            } else {
                $url = app('bitly')->getUrl($tmpurl);
            }

            $publications = Publication::limit(7)
                ->where('id', '!=', $publication->id)
                ->where('idioma', $idioma)
                ->with('imagenespublicaciones')
                ->orderBy('fecha_alta', 'desc')
                ->get();

            $image = ImagenPublicacion::where('publicacion_id', '=', $publication->id)
                ->orderBy('fecha_alta', 'desc')
                ->first();

            $imagePath = 'assets/frontend/images/imagennoticia.jpg';

            if (null !== $image) {
                $imagePath = $image->ruta;
            }

            return view('frontend.news')->with([
                'lastnews'     => $publication,
                'titulopagina' => 'noticias',
                'news'         => $publications,
                'imagePath'    => $imagePath,
                'paths'        => $paths,
                'pathslogo'    => $pathslogo,
                'url'          => $url,
            ]);

        } else {
            return response()->view('errors.404', [], 404);
        }
    }

    public function getpublicacion_porIdioma($id)
    {
        $idioma = $this->getIdioma();
        if ($idioma == "en") {
            $pub_idioma = Publication::find($id);
            return $pub_idioma->slug;
        } else {
            $pub_idioma = Publication::find($id);
            return $pub_idioma->slug;
        }

    }
//parkison
    public function parkinson()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();

        return view('frontend.parkinson')
            ->with('titulopagina', 'parkinson')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);

    }

//SECCION INSTITUCION

    public function institution()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();

        return view('frontend.institution')
            ->with('titulopagina', 'institucion')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);

    }

    public function history()
    {
        $paths             = $this->getbanners();
        $pathslogo         = $this->getlogo();
        $contenidohistoria = $this->gethistoria();
        return view('frontend.history')
            ->with('titulopagina', 'historia')
            ->with('paths', $paths)
            ->with('pathslogo', $pathslogo)
            ->with('contenidohistoria', $contenidohistoria);
    }

    public function gethistoria()
    {
        $idioma = trans('menu.idlanguage');
        if ($idioma == "es") {
            $contenidohistoria = Insthistoria::find(0);
        } elseif ($idioma == "pt") {
            $contenidohistoria = Insthistoria::find(1);
        } else {
            $contenidohistoria = Insthistoria::find(2);
        }

        if (is_null($contenidohistoria)) {
            return "";
        } else {
            return $contenidohistoria->contenido;
        }

        return $contenidohistoria->contenido;

    }

    public function authorities()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.authorities')
            ->with('titulopagina', 'autoridades')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function mission()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.mission')
            ->with('titulopagina', 'mision')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function values()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.values')
            ->with('titulopagina', 'valores')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

//FIN SECCION INSTITUCION
    public function services()
    {
        $idiomaservicio  = trans('menu.idlanguage');
        $paths           = $this->getbanners();
        $pathslogo       = $this->getlogo();
        $depto_servicios = $this->getservice();
        return view('frontend.services')
            ->with('titulopagina', 'servicios')
            ->with('paths', $paths)
            ->with('pathslogo', $pathslogo)
            ->with('departamento_servicios', $depto_servicios);
    }

    public function showservices($id)
    {
        $service        = Servicio::find($id);
        $idiomaservicio = trans('menu.idlanguage');
        if ($idiomaservicio == "es") {
            $descripcion = $service->contenido;
            $nombre      = $service->nombre;
        } elseif ($idiomaservicio == "en") {
            $descripcion = $service->enservice;
            $nombre      = $service->ennombre;
        } else {
            $descripcion = $service->ptservice;
            $nombre      = $service->ptnombre;
        }

        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.show_service')
            ->with('titulopagina', 'servicio')
            ->with('paths', $paths)
            ->with('pathslogo', $pathslogo)
            ->with('descripcion', $descripcion)
            ->with('nombre', $nombre);

    }

    public function getservice()
    {
        $idiomaservicio = trans('menu.idlanguage');
        if ($idiomaservicio == "es") {
            $depto_servicios = Departamento::with('servicios')->get();
        } elseif ($idiomaservicio == "en") {
            $depto_servicios = Departamento::with(['servicios' => function ($query) {
                $query->where('ennombre', '!=', 'null');
            }])->get();
        } else {
            $depto_servicios = Departamento::with(['servicios' => function ($query) {
                $query->where('ptnombre', '!=', 'null');
            }])->get();
        }

        return $depto_servicios;
    }
    public function patient_information()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.patient_information')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function circuit()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.circuit')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function schedules()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.schedules')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function prohibited()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.prohibited')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function authorized()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.authorized')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function you_can()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.you_can')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function transplants()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.transplants')
            ->with('titulopagina', 'trasplantes')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function trasplant_renal()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.trasplant_renal')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function trasplant_hepatico()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.trasplant_hepatico')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
    public function trasplant_cardiaco()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.trasplant_cardiaco')
            ->with('titulopagina', 'informacion_al_paciente')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }
//SECCION TELESALUD
    public function ehealth()
    {

        $paths      = $this->getbanners();
        $pathslogo  = $this->getlogo();
        $imgseccion = $this->getimgsections();
        $enlace     = $this->getvideo();
        //return response()->json(Publication::all());
        /*$pubs = Publication::all();
        foreach ($pubs as $pub) {
        echo $this->sanear_string($pub->slug) . '<br>';
        /*$pub->slug = $this->sanear_string($pub->slug);
        $pub->save();
        }
        die();*/
        return view('frontend.ehealth')
            ->with('titulopagina', 'cibersalud')
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths)
            ->with('imgsecciones', $imgseccion)
            ->with('enlacevideo', $enlace);

    }

    public function redireciontelesalud($id)
    {

        if ($id == 2) {
            return redirect('admin/sections')
                ->with('message_typeimg', self::MESSAGE_SUCCESS)
                ->with('messageimg', 'LA IMAGEN SE A GUARDADO CORRECTAMENTE.')
                ->with('activarseccion', 'telesalud')
                ->with('activartelesalud', 'telesaludimg');
        } else {
            return redirect('admin/sections')
                ->with('message_typeimg', self::MESSAGE_INFO)
                ->with('messageimg', 'LA IMAGEN SE A ELIMINADO CORRECTAMENTE.')
                ->with('activarseccion', 'telesalud')
                ->with('activartelesalud', 'telesaludimg');
        }

    }

    public function getimgsections()
    {
        $idioma     = trans('menu.idlanguage');
        $Imgsection = File::files(public_path() . '/assets/frontend/images/imgsecciones/imgtelesalud');

        $paths = [];
        foreach ($Imgsection as $path) {
            if ($idioma == "es") {
                $palabraclave   = strstr($path, 'idiomaes');
                $enlaceacortado = substr($palabraclave, 0, 8);
                if ($enlaceacortado == 'idiomaes') {
                    $paths[] = pathinfo($path);
                }
            } elseif ($idioma == "pt") {
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

    public function getbanners()
    {
        $idioma  = trans('menu.idlanguage');
        $banners = File::files(public_path() . '/assets/frontend/images/banners');
        $paths   = [];

        foreach ($banners as $path) {
            if ($idioma == "es") {
                $palabraclave   = strstr($path, 'idiomaes');
                $enlaceacortado = substr($palabraclave, 0, 8);

                if ($enlaceacortado == 'idiomaes') {
                    $paths[] = pathinfo($path);
                }
            } elseif ($idioma == "pt") {
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

    public function getlogo()
    {
        $logo  = File::files(public_path() . '/assets/frontend/images/imgsecciones');
        $paths = [];
        foreach ($logo as $path) {
            $paths[] = pathinfo($path);
        }
        return $paths;
    }
    public function getvideo()
    {
        $enlace = Healthvideo::find(1);
        return $enlace->url;
    }
// FIN SECCION TELESALUD

    public function sanear_string($string)
    {

        $string = utf8_encode(strtolower(trim($string)));

        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $string
        );

        //Esta parte se encarga de eliminar cualquier caracter extraño
        /*$string = str_replace(
        array("\", "¨", "º", "-", "~",
        "#", "@", "|", "!", """,
        "·", "$", "%", "&", "/",
        "(", ")", "?", "'", "¡",
        "¿", "[", "^", "<code>", "]",
        "+", "}", "{", "¨", "´",
        ">", "< ", ";", ",", ":",
        ".", " "),
        '',
        $string
        );*/
        return $string;
    }

    public function contact()
    {
        $paths     = $this->getbanners();
        $pathslogo = $this->getlogo();
        return view('frontend.contact')
            ->with('titulopagina', 'contacto')
            ->with('location', config('app.locale'))
            ->with('pathslogo', $pathslogo)
            ->with('paths', $paths);
    }

    public function sendcontact(Request $request)
    {
        $request->session()->put('mensaje', $request->input('message'));
        $request->session()->put('email', $request->input('email'));
        $request->session()->put('name', $request->input('name'));
        $request->session()->put('title', $request->input('title'));

        Mail::send('emails.contact', ['mensaje' => session('mensaje'), 'correo' => session('email'), 'nombre' => session('name')], function ($message) {
            $message->from(session('email'), session('name'));

            $message->to('contacto@hacfsa.gob.ar');

            $message->subject(session('title'));
        });

        return redirect(config('app.locale') . '/contacto')->with('confirm', 'ok');
    }

    public function sendparkinson(Request $request)
    {

        $secretKey = '6LdMvEAUAAAAAKeDC5HSEBnNfxovtA6Xjyar7tQW';
        $recaptcha = new ReCaptcha($secretKey);
        $captcha   = $request->input('g-recaptcha-response');
        $resp      = $recaptcha->verify($captcha, $request->ip());

        if (!$resp->isSuccess()) {
            return redirect('es/parkinson-es')
                ->withInput()
                ->with('message_incripcion', self::MESSAGE_ERROR)
                ->with('messagein', 'ERROR EN LA CONSULTA, VERIFIQUE LOS CAMPOS O VERIFIQUE QUE NO ES UN ROBOT.');

        } else {
            $request->session()->put('mensaje', $request->input('message'));
            $request->session()->put('email', $request->input('email'));
            $request->session()->put('name', $request->input('name'));
            $request->session()->put('title', $request->input('title'));

            Mail::send('emails.parkinson', ['mensaje' => session('mensaje'), 'correo' => session('email'), 'nombre' => session('name')], function ($message) {
                $message->from(session('email'), session('name'));

                $message->to('parkinson.hac.fsa@gmail.com');

                $message->bcc('nocettifabian@gmail.com');

                $message->subject(session('title'));
            });

            return redirect(config('app.locale') . '/parkinson-es')->with('confirm', 'ok');
        }
    }

    public function getIdioma()
    {
        $idio = config('app.locale');

        if (config('app.locale')) {

            return config('app.locale');
        } else {
            return 'es';
        }
    }
}
