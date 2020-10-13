<?php

namespace App\Http\Helpers;

use Cartalyst\Sentinel\Native\Facades\Sentinel;
use App\User;

class Helpers
{

    public static function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

	public static function getSubString($string, $length=NULL)
	{
	    //Si no se especifica la longitud por defecto es 50
	    if ($length == NULL)
	        $length = 50;
	    //Primero eliminamos las etiquetas html y luego cortamos el string
	    $stringDisplay = substr(strip_tags($string), 0, $length);
	    //Si el texto es mayor que la longitud se agrega puntos suspensivos
	    if (strlen(strip_tags($string)) > $length)
	        $stringDisplay .= ' ...';
	    return $stringDisplay;
	} 

	//funcion para devolver el id de el rol del usuario

	public static function rolusuario()
	{
	    $usuario = Sentinel::getUser();
		$roles = User::find($usuario->id)->roles()->first();
		$rol = $roles->id;

	    return $rol;
	} 



}
