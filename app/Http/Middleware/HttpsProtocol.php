<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class HttpsProtocol
{
    private const APP_ENV_PRODUCTION = 'production';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (
            !$request->secure()
//            && env('APP_ENV') === self::APP_ENV_PRODUCTION
        ) {
            return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}
