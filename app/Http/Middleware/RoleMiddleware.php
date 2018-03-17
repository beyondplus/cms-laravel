<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->guard('admins')->check()) {
            $data = explode("/", url()->current());
            if(count($data)>4) {
                $uri = array_slice($data, 4);
                //temp for general uri
                //$uri = implode("/", $uri);
                $uri = $uri[0];
                $access_check = auth()->guard('admins')->user()->access($uri);
                if(count($access_check)) {
                    return $next($request);  
                } else {
                    if($uri == 'logout') {
                        return $next($request);
                    }
                    return abort("404");
                }
            } 
        } 
            
        return $next($request);    

    }
}
