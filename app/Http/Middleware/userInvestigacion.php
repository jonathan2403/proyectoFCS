<?php

namespace FCS\Http\Middleware;

use FCS\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class userInvestigacion{

	public function handle($request, Closure $next, $guard=null){
		if(Auth::user() && Auth::user()->id == User::INVESTIGACION){
			return $next($request);
		}
		elseif(Auth::user()){
			return redirect()->back();
		}

		return redirect()->guest('auth/login');
	}
}