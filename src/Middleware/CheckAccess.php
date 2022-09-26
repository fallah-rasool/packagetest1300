<?php

namespace TNTLearn\Payment\Middleware;

use  Closure;
class CheckAccess
{
    public function handle($request,Closure $next){
        return "no-create"  ;
        return $next($request) ;
    }

}
