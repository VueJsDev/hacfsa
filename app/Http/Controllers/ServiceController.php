<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use App\Servicio;
use Illuminate\Http\Request;
use Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    const MESSAGE_SUCCESS         = 1;
    const MESSAGE_ERROR           = 2;
    const MESSAGE_SUCCESS_EDITION = 3;
    const MESSAGE_DELETE          = 4;

    /**
     * Messages for successfull saving
     *
     * @var array
     */
    protected $sucessfull = [
        'message_typeservice' => self::MESSAGE_SUCCESS,
        'message'             => 'EL SERVICIO SE HA GUARDADO CORRECTAMENTE.',
    ];

    protected $successful_edition = [
        'message_typeservice' => self::MESSAGE_SUCCESS_EDITION,
        'message'             => 'LOS CAMBIOS SE HAN  GUARDADO CORRECTAMENTE.',
    ];
    protected $delete = [
        'message_typeservice' => self::MESSAGE_DELETE,
        'message'             => 'EL SERVICIO SE BORRADO CORRECTAMENTE.',
    ];

    /**
     * Messages for error in saving
     *
     * @var array
     */
    protected $errorMsg = [
        'message_typeservice' => self::MESSAGE_ERROR,
        'message'             => 'ERROR AL INTENTAR GUARDAR EL SERVICIO.',
    ];

    /**
     * Rules for Validation
     *
     * @var array
     */
    protected $rules = [
        'nombreservicio'    => 'required',
        'contenidoservicio' => 'required',
    ];
    public function index()
    {

        $depto_servicios = Departamento::with('servicios')->get();
        return view('backend.listservice', [
            'menu'                   => 'service',
            'departamento_servicios' => $depto_servicios,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service', [
            'menu'          => 'service',
            'departamentos' => Departamento::all()->toArray(),
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
        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            return redirect('admin/service/create')
                ->withErrors($validator)
                ->withInput();
        }

        $servicios = new Servicio();

        $servicios->nombre          = trim($request->nombreservicio);
        $servicios->contenido       = trim($request->contenidoservicio);
        $servicios->departamento_id = $request->departamentos;

        if ($servicios->save()) {
            return redirect('admin/service/create')->with($this->sucessfull);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio = Servicio::findOrFail($id);

        return view('backend.editservice', [
            'menu'          => 'service',
            'servicio'      => $servicio->toArray(),
            'departamentos' => Departamento::all(),
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
        $rol       = Helpers::rolusuario();
        $servicios = Servicio::findOrFail($id);

        if ($rol == 1) {
            $servicios->nombre          = trim($request->nombreservicio);
            $servicios->contenido       = trim($request->contenido);
            $servicios->departamento_id = $request->departamentos;
        } elseif ($rol == 2) {
            $servicios->ptnombre  = trim($request->nombreservicio);
            $servicios->ptservice = trim($request->contenido);
        } else {
            $servicios->ennombre  = trim($request->nombreservicio);
            $servicios->enservice = trim($request->contenido);

        }

        if ($servicios->save()) {

            return redirect('admin/service/' . $id . '/edit')->with($this->successful_edition);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servicio::destroy((int) $id);
        return redirect('admin/service/')->with($this->delete);
    }
}
