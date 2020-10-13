<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Cartalyst\Sentinel\Native\Facades\Sentinel;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Illuminate\Http\Request;
use ReCaptcha\ReCaptcha;


class AuthController extends Controller
{



    const MESSAGE_SUCCESS   = 1;
    const MESSAGE_ERROR     = 2;

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | Para implementación de Google ReCaptcha, key para autenticar con la API
    | hay otra Public Key en el html de las vistas -> Diego Maximiliano
    |
    */

    protected $secretKey = '6LetYzMUAAAAAKKVhcDRv9md1aK7pFu9nvNQR5W7';

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getLogin()
    {
        return view('backend.login');
    }

    public function postLogin(Request $request)
    {

        $recaptcha = new ReCaptcha($this->secretKey);
        $captcha   = $request->input('g-recaptcha-response');
        //$resp  = $recaptcha->verify($captcha, $request->ip());

        /*if ($resp->isSuccess()) {
            echo 'yes';
        } else {
            $errors = $resp->getErrorCodes();
        }
        die();*/
        try
        {
            $datos = [
                'email'   => mb_strtolower(trim($request->input('username'))),
                'password'  => $request->input('password')
            ];
            //VERIFICO SI SE ENCUENTRA EL USUARIO..SI SE ENCUENTRA LO LOGEA
            if (/*$resp->isSuccess() && */Sentinel::authenticate($datos))
            {
                return redirect('admin/news');
            }
            else
            {
                return redirect('admin/login')
                    ->withInput()
                    ->with('message_type', self::MESSAGE_ERROR)
                    ->with('message', 'VERIFIQUE LOS DATOS POR FAVOR.');
            }
        }
        catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e)
        {
            //EL USUARIO NO ESTÁ ACTIVO
                return redirect('admin/login')
                    ->withInput()
                    ->with('message_type', self::MESSAGE_ERROR)
                    ->with('message', 'POR FAVOR, ACTIVE SU CUENTA.');
        }
    }

    public function getLogout()
    {
        Sentinel::logout();

        //Session::forget('permisos');

        //Session::flash('msgok', 'Gracias por visitarnos!!.');
        return redirect('admin/login');
    }

    public function activeAccount(Request $request)
    {
        $userid = $request->input('userid');
        $code   = $request->input('code');

        $user = Sentinel::findById($userid);

        if (Activation::complete($user, $code))
        {
            return redirect('admin/login')
                ->with('message_type', self::MESSAGE_SUCCESS)
                ->with('message', 'TU CUENTA HA SIDO ACTIVADA.');
        }
        else
        {
            return redirect('admin/login')
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'HUBO UN ERROR AL ACTIVAR LA CUENTA.');
        }
    }

}
