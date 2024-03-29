<?php

namespace App\Http\Middleware;

use Closure;

class HttpsProtocol
{
    private const APP_ENV_PRODUCTION = 'production';
    private const APP_ENV_DEVELOPMENT = 'development';

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
            (
                !$request->secure()
                //|| !str_contains($request->url(), 'www')
            )
            && in_array(env('APP_ENV') , [
                self::APP_ENV_PRODUCTION,
                self::APP_ENV_DEVELOPMENT,
            ])
        ) {
            return redirect(explode('/', env('APP_URL'),4)[2] . $request->getRequestUri());
        }

        return $next($request);
    }
}
