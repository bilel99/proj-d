<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BasicAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!empty(config('docteurs_gardes.BASIC_AUTH.BASIC_AUTH_USERNAME')) ||
            !empty(config('docteurs_gardes.BASIC_AUTH.BASIC_AUTH_PASSWORD'))) {
            if ($request->getUser() !== config('docteurs_gardes.BASIC_AUTH.BASIC_AUTH_USERNAME') ||
                $request->getPassword() !== config('docteurs_gardes.BASIC_AUTH.BASIC_AUTH_PASSWORD')) {
                $headers = ['WWW-Authenticate' => 'Basic'];
                return \Response::make(__('globals.basic_auth.invalid_credentials'), 401, $headers);
            }
        }

        return $next($request);
    }
}
