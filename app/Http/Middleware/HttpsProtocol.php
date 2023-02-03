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
            env('APP_ENV') === self::APP_ENV_PRODUCTION
            && (
                !strpos($request->header('host') , 'www')
                || !$request->secure()
            )
        ) {
            $path = $request->path() === '/'
                ? ''
                : $request->path();

            return Redirect::to('https://www.tsconsultoria.com.br/' . $path);
        }

        return $next($request);
    }
}
