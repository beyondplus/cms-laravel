<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
                $uri = implode("/", $uri);
                // return dd($uri);
                $access_check = auth()->guard('admins')->user()->access($uri);
                // return dd(json_encode($access_check));
                if(count($access_check)) {
                    return $next($request);  
                } else {
                    return abort("404");
                }
            } 
        } 
            
        return $next($request);    

    }
}
