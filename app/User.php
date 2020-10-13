<?php

namespace App;

use DB;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static function getUserPorRoles()
    {
        $result = DB::table('role_users', 'users', 'roles')
            ->select(DB::raw('users.id as user_id, users.first_name as first_name, users.last_name as last_name,
                    users.username as username, users.email as email, roles.name as name'))
            ->join('users', 'role_users.user_id', '=', 'users.id')
            ->join('roles', 'role_users.role_id', '=', 'roles.id')
            ->orderBy('users.last_name')
            ->get();

        return $result;
    }

    public function activations()
    {
        return $this->hasmany('Activation', 'user_id');
    }

    public function persistences()
    {
        return $this->hasmany('Persistence', 'user_id');
    }

    public function reminders()
    {
        return $this->hasmany('Reminder', 'user_id');
    }

    public function Throttles()
    {
        return $this->hasmany('Throttle', 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'role_users');
    }
}
