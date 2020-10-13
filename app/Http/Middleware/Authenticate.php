<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Cartalyst\Sentinel\Native\Facades\Sentinel;

class Authenticate
{
    const MESSAGE_SUCCESS   = 1;
    const MESSAGE_ERROR     = 2;     
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Sentinel::guest()) {
            return redirect('admin/login')
                ->with('message_type', self::MESSAGE_ERROR)
                ->with('message', 'DEBES LOGEARTE PRIMERO.');
        }

        return $next($request);
    }
}
