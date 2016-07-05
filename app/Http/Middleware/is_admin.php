<?php

namespace FCS\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Closure;

class is_admin
{
    protected $auth;
    
    public function __construct(Guard $auth)
        {
            $this->auth = $auth;
        }
    
    public function handle($request, Closure $next)
    {
        
        if ($this->auth->user()->idrol=='1') {
            
            //return redirect()->to('admin');
            break;
        }
        else {
            //return redirect('admin');   
        }

        
        return $next($request);
    }
}
