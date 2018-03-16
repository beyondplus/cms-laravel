<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Bp_access;

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
            $role = auth()->guard('admins')->user()->access();
            dd(json_encode($role));

            // if($role==1) {
            //     echo "user";
            //     return abort(404);
            // } elseif($role=2) {
            //     echo "staff";
            // } elseif($role=3) {
            //     echo "admin";
            // } elseif($role=4) {
            //     echo "superadmin";
            // } else {
            //     echo "other";
            // }
            // dd(auth()->guard('admins')->user()->role);
            
            // dd($request->path());
        } 
        return $next($request);
    }
}
