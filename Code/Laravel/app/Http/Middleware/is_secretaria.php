<?php

namespace FCS\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Session;
use Closure;

class is_secretaria
{
    protected $auth;
    public function __construct(Guard $auth)
        {
            $this->auth = $auth;
        }

    public function handle($request, Closure $next)
    {
        switch ($this->auth->user()->idrol) {
            case '1':
                # Administrador
                return redirect()->to('Admin');
                break;
            case '2':
                # Secretaria Academica
                //return redirect()->to('Secretaria');
                break;
            default:
                # Por Defecto
                return Redirect::('auth/login');
                break;
        }
        return $next($request);
    }
}
