<?php

namespace Mugaco\Pack\Middlewares;


use Closure;

class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Perform action //no entiendo la utilidad; no he terminado de implementar el ejemplo en sel servicio

        return $response;
    }
}