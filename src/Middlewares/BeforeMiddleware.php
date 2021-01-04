<?php

namespace Mugaco\Pack\Middlewares;

use Closure;

class BeforeMiddleware
{
    public function handle($request, Closure $next)
    {
        if ($request->has('title')) {
            $request->merge([
                'title' => ucfirst($request->title)
            ]);
        }

        return $next($request);
    }
}