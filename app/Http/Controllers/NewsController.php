<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\Publicacion as Publication;
use App\TipoPublicacion;
use App\User;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\File;
use Image;

class NewsController extends Controller
{

    const MESSAGE_SUCCESS  = 1;
    const MESSAGE_ERROR    = 2;
    const MESSAGE_TRADUCIR = 3;

    /**
     * Messages for successfull saving
     *
     * @var array
     */
    protected $sucessfull = [
        'message_type' => self::MESSAGE_SUCCESS,
        'message'      => 'LA PUBLICACIÓN SE HA GUARDADO CORRECTAMENTE.',
    ];
    /**
     * Messages for successfull saving
     *
     * @var array
     */
    protected $traducido = [
        'message_type' => self::MESSAGE_TRADUCIR,
        'message'      => 'LA PUBLICACIÓN SE HA TRADUCIDO CORRECTAMENTE.',
    ];

    /**
     * Messages for error in saving
     *
     * @var array
     */
    protected $errorMsg = [
        'message_type' => self::MESSAGE_ERROR,
        'message'      => 'ERROR AL INTENTAR GUARDAR LA PUBLICACIÓN.',
    ];

    /**
     * Rules for Validation
     *
     * @var array
     */
    protected $rules = [
        'title' => 'required',
        'news'  => 'required',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.listnews', [
            'menu' => 'news',
            'news' => Publication::where('idioma', '=', 'es')->orderBy('fecha_alta', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.newnews', [
            'menu'          => 'news',
            'publicaciones' => TipoPublicacion::all()->toArray(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editor = User::find((int) Sentinel::getUser()->toArray()['id']);
        $lang   = '';
        foreach ($editor->roles as $role) {
            $lang = $role->idioma; //para setear el lang del post, que depende del perfil que tenga el editor -> Diego Maximiliano
        }

        $editor = Sentinel::getUser()->toArray();

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('admin/news/create')
                ->withErrors($validator)
                ->withInput();
        }

        //PATH DE IMAGENES
        $path_img = public_path() . '/assets/frontend/images/noticias/';
        $rol      = Helpers::rolusuario();
        
        /*foreach ($request->file('file') as $file) {*/
            $nombre             = $request->file('file')->getClientOriginalName();
            /*$nombreSinExtencion = strstr($nombre, '.', true);*/

            $imgrenombrada = 'idiomaes' . Helpers::generateRandomString(rand(15, 30)) . '.png';

            Image::make($request->file('file'))->save($path_img . $imgrenombrada);
        /*}*/    


        $publication = new Publication();

        $publication->padre_id           = 'null';
        $publication->idioma             = $lang;
        $publication->tipopublicacion_id = $request->tipopublicacion;
        $publication->fecha              = 'null'; //fecha de publicacion
        $publication->titulo             = trim($request->title);
        $publication->slug               = strtolower(str_slug($publication->titulo, '-'));
        $publication->bajada             = 'null';
        $publication->cuerpo             = trim($request->news);
        $publication->portada            = 'null';
        $publication->visitas            = 'null';
        $publication->publicar           = true;
        $publication->usuario_alta       = $editor['username'];
        $publication->fecha_alta         = date('Y-m-d H:i:s');
        $publication->usuario_modi       = 'null';
        $publication->fecha_modi         = 'null';
        $publication->urlimagen          = $imgrenombrada; /*Se agrega aca porque hay espacio y no quiero tocar la BBDD*/

        /*dd($publication);*/
        
        if (Publication::where('slug', '=', $publication->slug)->exists()) {
            return redirect('admin/news/create')
                ->withErrors($validator)
                ->withInput()
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'EL TÍTULO COINCIDE CON OTRA PUBLICACIÓN, CAMBIELO.');
        }

        if ($publication->save()) {
            return redirect('admin/news/create')->with($this->sucessfull);
        }
    }

    public function storetraducido(Request $request, $id)
    {
        $rol = Helpers::rolusuario();
        //PATH DE IMAGENES
        $path_img = public_path() . '/assets/frontend/images/noticias/';
        
        $nombre             = $request->file('file')->getClientOriginalName();
        /*$nombreSinExtencion = strstr($nombre, '.', true);*/

        if ($rol == 2) {
            $idioma = "pt";
            $imgrenombrada = 'idiomapt' . Helpers::generateRandomString(rand(15, 30)) . '.png';
        } else {

            $idioma = "en";
            $imgrenombrada = 'idiomaen' . Helpers::generateRandomString(rand(15, 30)) . '.png';
        }

        Image::make($request->file('file'))->save($path_img . $imgrenombrada);

        $editor = Sentinel::getUser()->toArray();

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('admin/news/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }
        $fechaDeAlta = Publication::find($id);
        $publication = new Publication();

        $editor = Sentinel::getUser()->toArray();

        $publication->padre_id           = 'null';
        $publication->idioma             = $idioma;
        $publication->tipopublicacion_id = $request->tipopublicacion;
        $publication->titulo             = trim($request->title);
        $publication->slug               = strtolower(str_slug($publication->titulo, '-'));
        $publication->bajada             = 'null';
        $publication->cuerpo             = trim($request->news);
        $publication->portada            = 'null';
        $publication->visitas            = 'null';
        $publication->publicar           = (bool) $request->state;
        $publication->fecha_alta         = $fechaDeAlta->created_at->format('Y-m-d H:i:s');
        $publication->usuario_modi       = $editor['username'];
        $publication->fecha_modi         = date('Y-m-d H:i:s');
        $publication->urlimagen          = $imgrenombrada; /*Se agrega aca porque hay espacio y no quiero tocar la BBDD*/

        if (Publication::where('slug', '=', $publication->slug)->exists()) {
            return redirect('admin/news/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput()
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'EL TÍTULO COINCIDE CON OTRA PUBLICACIÓN, CAMBIELO.');
        }

        if ($publication->save()) {
            $idtraduccion = $publication->id;
            $paths        = $this->updatetraducido($request, $id, $idtraduccion);
            return redirect('admin/news/')->with($this->traducido);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updatetraducido(Request $request, $id, $idtraduccion)
    {

        $rol = Helpers::rolusuario();

        $publication = Publication::findOrFail($id);

        if ($rol == 2) {
            $idioma    = "pt";
            $traducido = 1;
            $idpt      = $idtraduccion;

        } else {
            $idioma    = "en";
            $traducido = 1;
            $iden      = $idtraduccion;
        }

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('admin/news/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $publication->fecha = 'null'; //fecha de publicacion

        if ((bool) $request->state) {
            $publication->fecha = date('Y-m-d H:i:s');
        }

        if ($rol == 2) {
            $publication->tpt  = $traducido;
            $publication->idpt = $idpt;
        } elseif ($rol == 3) {
            $publication->ten  = $traducido;
            $publication->iden = $iden;
        }

        if ($publication->save()) {

            return "OK";
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $rol         = Helpers::rolusuario();
        $publication = Publication::findOrFail($id);

        if ($rol == 2 and $publication->tpt == 1) {
            $publitraducido = Publication::findOrFail($publication->idpt);

        } elseif ($rol == 3 and $publication->ten == 1) {
            $publitraducido = Publication::findOrFail($publication->iden);
        } else {
            $publitraducido = "";

        }
        $images = $publication->imagenespublicaciones;

        return view('backend.editnews', [
            'menu'              => 'news',
            'publication'       => $publication->toArray(),
            'images'            => $images,
            'tipopublicaciones' => TipoPublicacion::all(),
            'publitraducido'    => $publitraducido,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        
        $rol = Helpers::rolusuario();

        //PATH DE IMAGENES
        $path_img = public_path() . '/assets/frontend/images/noticias/';
        $rol      = Helpers::rolusuario();
        
        /*foreach ($request->file('file') as $file) {*/
            /*$nombreSinExtencion = strstr($nombre, '.', true);*/

            $imgrenombrada = 'idiomaes' . Helpers::generateRandomString(rand(15, 30)) . '.png';

            Image::make($request->file('file'))->save($path_img . $imgrenombrada);
        /*}*/ 

        $publication = Publication::findOrFail($id);

        if ($rol == 1) {
            $idioma = "es";

        } elseif ($rol == 2) {
            $idioma = "pt";

        } else {
            $idioma = "en";

        }

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('admin/news/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        $publication->fecha = 'null'; //fecha de publicacion

        if ((bool) $request->state) {
            $publication->fecha = date('Y-m-d H:i:s');
        }

        $editor = Sentinel::getUser()->toArray();

        $publication->padre_id           = 'null';
        $publication->idioma             = $idioma;
        $publication->tipopublicacion_id = $request->tipopublicacion;
        $publication->titulo             = trim($request->title);
        $publication->slug               = strtolower(str_slug($publication->titulo, '-'));
        $publication->bajada             = 'null';
        $publication->cuerpo             = trim($request->news);
        $publication->portada            = 'null';
        $publication->publicar           = (bool) $request->state;
        $publication->usuario_modi       = $editor['username'];
        $publication->fecha_modi         = date('Y-m-d H:i:s');
        $publication->urlimagen          = $imgrenombrada;

        if ($publication->save()) {
            if ($rol = 1) {
                return redirect('admin/news/' . $id . '/edit')->with($this->sucessfull);
            } else {
                return redirect('admin/news/')->with($this->traducido);
            }

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publication::destroy((int) $id);
        return redirect('admin/news/')->with($this->sucessfull);
    }
}
