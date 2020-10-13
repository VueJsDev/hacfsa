<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Postulante;
use App\Residencia;
use Illuminate\Http\Request;

class PostulanteController extends Controller
{
    const MESSAGE_SUCCESS  = 1;
    const MESSAGE_ERROR    = 2;
    const MESSAGE_TRADUCIR = 3;
    const MESSAGE_NEW      = 4;
    const MESSAGE_DELTER   = 5;
    /**
     * Messages for successfull saving
     *
     * @var array
     */
    protected $sucessfull = [
        'message_type' => self::MESSAGE_SUCCESS,
        'message'      => 'EL POSTULANTE SE A BORRADO CORRECTAMENTE.',
    ];

    /**
     * Messages for successfull saving
     *
     * @var array
     */
    protected $sucessR = [
        'message_type' => self::MESSAGE_DELTER,
        'message'      => 'LA RESIDENCIA SE A BORRADO CORRECTAMENTE.',
    ];

    /**
     * Messages for successfull saving
     *
     * @var array
     */
    protected $newR = [
        'message_type' => self::MESSAGE_NEW,
        'message'      => 'LA RESIDENCIA SE A GUARDADO CORRECTAMENTE.',
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

    
    public function index()
    {
        $postulantes = Postulante::with('residencia')->get();

        //return $postulantes;

        return view('backend.postulantes',['menu' => 'postulantes'])
            ->with('postulantes', $postulantes);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Postulante::destroy((int) $id);
        return redirect('admin/residencias/postulantes')->with($this->sucessfull);
    }

    public function viewsfrmpostulantes()
    {
        $residencias = Residencia::get();
        if (count($residencias) == 0) {
            $listResidencia = null;
            return view('backend.formpostulantes',['menu' => 'formpostulantes'])
            ->with('residencias', $listResidencia);
        }
        
        $i=0;
        foreach ($residencias as $residencia) {    
            $listResidencia[$i] = [$residencia->id,$residencia->especialidad];
            $i++;
        }
        return view('backend.formpostulantes',['menu' => 'formpostulantes'])
            ->with('residencias', $listResidencia);
    }

    public function destroyResidences($id)
    {
        
        Residencia::destroy((int) $id);
        return redirect('admin/residencias/frmpostulantes')->with($this->sucessR);
    }

    public function storeResidences(Request $request)
    {
        $Residencia = new Residencia;

        $Residencia->id = $request->id;
        $Residencia->especialidad = $request->name;

        if ($Residencia->save()) {
            return redirect('admin/residencias/frmpostulantes')->with($this->newR);
        } else {
            return redirect('admin/residencias/frmpostulantes')->with($this->sucessfull);
        }
    }
}
