<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role as Role;
use App\User as User;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;

class UsersController extends Controller
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
        $users = User::getUserPorRoles();

        $user  = Sentinel::getUser();
        $roles = User::find($user->id)->roles()->first();

        return view('backend.listusers', ['users' => $users, 'menu' => 'users']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        //$roles = Role::lists('name', 'id')->prepend('Seleccionar');

        return view('backend.newuser', ['roles' => $roles, 'menu' => 'users']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'apellido' => trim($request->input("lastname")),
            'nombre'   => trim($request->input("name")),
            'usuario'  => strtolower(trim($request->input("user"))),
            'password' => trim($request->input("pass")),
            'email'    => trim($request->input("email")),
        ];

        $validator = Validator::make($data, $this->rules['create'], $this->messages['create']);

        $perfil = trim($request->input("perfil"));

        if ($perfil == 0) {
            return redirect('admin/users/create')
                ->withErrors($validator)
                ->withInput()
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'SELECCIONES UN PERFIL, POR FAVOR.');
        }

        if ($validator->fails()) {
            return redirect('admin/users/create')
                ->withErrors($validator)
                ->withInput()
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'ERROR AL INTENTAR CREAR EN USUARIO, VERIFIQUE LOS CAMPOS.');
        } else {

            $email = trim($request->input("email"));

            $credentials = [
                'login' => $email,
            ];

            //VERIFICO SI YA EXISTE UN USUARIO CON ESTE CORREO
            if ($existsuser = Sentinel::findByCredentials($credentials)) {
                //DEVUELVO AL FORMULARIO DE CREACIÓN DE USUARIOS
                return redirect('admin/users/create')
                    ->with('message_type', self::MESSAGE_ERROR)
                    ->withInput()
                    ->with('message', 'YA EXISTE UN USUARIO REGISTRADO CON ESTE CORREO.');
            }

            $user = new User();

            $user->last_name  = trim($request->input("lastname"));
            $user->first_name = trim($request->input("name"));
            $user->email      = $email;
            $user->username   = strtolower(trim($request->input("user")));
            $user->password   = Hash::make(trim($request->input("pass")));

            $user->save();

            $iduser = $user->id;

            $perfil = Role::findOrFail($request->input("perfil"));

            $role = Sentinel::findRoleByName($perfil->name);

            $role->users()->attach($user);

            $act_user = Sentinel::findById($iduser);

            $activation = Activation::create($act_user);

            Activation::complete($act_user, $activation->code);

            /*
            // ENVIO EL CORREO PARA LA ACTIVACIÓN DE LA CUENTA
            /*/
            //$this->sendEmailActiveAccount('emails.activeaccount', $iduser, $activation->code);

            return redirect('admin/users/create')
                ->with('message_type', self::MESSAGE_SUCCESS)
                ->with('message', 'EL USUARIO SE HA CREADO CORRECTAMENTE.');
        }
        /* EN EL CASO DE ERROR
    ->flash('message_type', self::MESSAGE_ERROR)
    ->flash('message', 'ERROR AL INTENTAR CREAR UN USUARIO.');
     */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id)->toArray();

        $roles = Role::all();

        $user = DB::table('role_users')->where('user_id', $id)->first();
        //$roles = Role::lists('name', 'id')->prepend('Seleccionar');

        return view('backend.edituser', ['menu' => 'users', 'roles' => $roles, 'users' => $users, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //$usrid      = $request->input($id);
        $user = User::findOrFail($id);

        $data = [
            'apellido' => trim($request->input("lastname")),
            'nombre'   => trim($request->input("name")),
            'usuario'  => strtolower(trim($request->input("user"))),
            'email'    => trim($request->input("email")),
            'password' => trim($request->input("pass")),
        ];

        $validator = Validator::make($data, $this->rules['update'], $this->messages['update']);

        $perfil = trim($request->input("perfil"));

        if ($perfil == 0) {
            return redirect('admin/users/' . $id)
                ->withErrors($validator)
                ->withInput()
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'ERROR AL INTENTAR ACTUALIZAR EL USUARIO.');
        }

        if ($validator->fails()) {
            return redirect('admin/users/' . $id)
                ->withErrors($validator)
                ->withInput()
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'ERROR AL INTENTAR ACTUALIZAR EL USUARIO.');
        } else {

            $user             = User::findOrFail($id);
            $user->last_name  = trim($request->input("lastname"));
            $user->first_name = trim($request->input("name"));
            $user->email      = trim($request->input("email"));
            $user->username   = strtolower(trim($request->input("user")));

            if (!empty($request->input("pass"))) {
                $user->password = Hash::make(trim($request->input("pass")));
            }

            $user->save();

            $perfil = Role::findOrFail($request->input("perfil"));

            $user = Sentinel::findById($id);

            $role = Sentinel::findRoleByName($perfil->name);

            //$role->users()->detach($user);
            $user->roles()->detach();

            $user = Sentinel::findById($id);

            $role = Sentinel::findRoleByName($perfil->name);

            $role->users()->attach($user);

            return redirect('admin/users/' . $user->id)
                ->with('message_type', self::MESSAGE_SUCCESS)
                ->with('message', 'USUARIO MODIFICADO CON ÉXITO!');
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
        User::destroy($id);

        return redirect('admin/users')
            ->with('message_type', self::MESSAGE_SUCCESS)
            ->with('message', 'SE HA ELIMINADO EL USUARIO.');

    }
    public function perfilnuevo(Request $request)
    {

        $perfilNuevo = new Role();

        $perfilNuevo->name   = trim($request->input("cargap"));
        $perfilNuevo->slug   = trim($request->input("cargap"));
        $perfilNuevo->idioma = trim($request->input("idiomap"));

        $perfilNuevo->save();
        return redirect('admin/users/create')
            ->with('message_type', self::MESSAGE_SUCCESS)
            ->with('message', 'SE CARGO CORRECTAMENTE EL PERFIL.');
    }

    public function sendEmailActiveAccount($viewpage, $id, $code)
    {
        $user = User::findOrFail($id);

        Mail::send($viewpage, ['user' => $user, 'code' => $code], function ($m) use ($user) {
            $m->from('contacto@hacfsa.gob.ar', 'HAC');

            $m->to($user->email, $user->first_name)->subject('Activación de cuenta');
        });

        return redirect('admin/users')
            ->with('message_type', self::MESSAGE_SUCCESS)
            ->with('message', 'SE ENVIO UN CORREO DE ACTIVACIÓN DE CUENTA.');

    }

    public $rules = [
        'create' => [
            'apellido' => 'required',
            'nombre'   => 'required',
            'usuario'  => 'required',
            'email'    => 'email',
            'password' => 'required|min:6',
        ],
        'update' => [
            'apellido' => 'required',
            'nombre'   => 'required',
            'usuario'  => 'required',
            'email'    => 'email',
        ],
    ];

    public $messages = [
        'create' => [
            'apellido.required' => 'El apellido es obligatorio.',
            'nombre.required'   => 'El nombre es obligatorio.',
            'usuario.required'  => 'El usuario es obligatorio.',
            'email.required'    => 'El correo es obligatorio.',
            'email.email'       => 'No tiene formato de correo.',
            'password.required' => 'El password es obligatorio.',
            'password.min'      => 'Mínimo 6 caracteres.',
        ],
        'update' => [
            'apellido.required' => 'El apellido es obligatorio.',
            'nombre.required'   => 'El nombre es obligatorio.',
            'usuario.required'  => 'El usuario es obligatorio.',
            'email.required'    => 'El correo es olbigatorio.',
            'email.email'       => 'No tiene formato de correo.',
        ],
    ];
}
