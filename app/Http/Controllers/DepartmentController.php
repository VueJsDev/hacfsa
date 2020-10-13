<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Controllers\Controller;
use App\Http\Helpers\Helpers;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Departamento::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dpto = new Departamento;

        $dpto->nombre = $request->name;

        if ($dpto->save()) {
            return response()->json(['state' => 'ok', 'depto' => $dpto]);
        } else {
            return response()->json(['state' => 'error']);
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
        $rol             = Helpers::rolusuario();
        $traducciondepto = $request->texto;
        $dptotraducido   = Departamento::find($id);

        if ($rol == 2) {
            $dptotraducido->ptdepto = $traducciondepto;

        } elseif ($rol == 3) {

            $dptotraducido->endepto = $traducciondepto;

        }

        if ($dptotraducido->save()) {

            return response()->json(['state' => 'ok', 'dptotraducido' => $dptotraducido->endepto]);
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
        $dpto = Departamento::find($id);
        try {
            $dpto->delete();
        } catch (Illuminate\Database\QueryException $e) {
            return response()->json(['state' => 'error']);

        } catch (PDOException $e) {
            return response()->json(['state' => 'error']);
        }

    }
}
