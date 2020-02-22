<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        if($request->method() === 'GET') {
            $segment = explode('-', $request->segment(1))[0];

            if(!in_array($segment, config('app.locales'))) {
                return abort(404);
            }

            session(['locale' => $segment]);
            app()->setLocale($segment);
        }
        return $next($request);
    }
}
