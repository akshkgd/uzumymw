<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'https://codekaro.in/1591773981:AAEwrVKTYXKLLBt04o7BwS-k1hoPQkf3EG4/webhook',
        '1591773981:AAEwrVKTYXKLLBt04o7BwS-k1hoPQkf3EG4/webhook',
        '*'
        
    ];
}
