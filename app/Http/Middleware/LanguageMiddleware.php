<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Redirect;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        
        if (! in_array($locale, config('app.locales')) && ! is_null($locale)) {

            \App::setLocale(config('app.locale')); 
            $segments = $request->segments();
            $segments[0] = config('app.locale');
            if ($locale=='admin' || $locale=='auth' || $locale=='uploads'){
                \App::setLocale($locale);
                return $next($request);
            }
            else
            {
              return Redirect::to(implode('/', $segments));  
            }
        }

        \App::setLocale($locale); 
        return $next($request);
    }
}
