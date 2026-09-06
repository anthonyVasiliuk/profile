<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // The app is only reachable through the edge Caddy container, never directly,
        // so its X-Forwarded-* headers can be trusted. Without this, url()->current()
        // renders canonical and og:url with the http scheme.
        $middleware->trustProxies(at: '*');

        $middleware->web(append: [
            App\Http\Middleware\SetLocale::class,
            App\Http\Middleware\AddSecurityHeaders::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
