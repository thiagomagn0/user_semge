<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class Users
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

        $users=auth()->user()->users;
       
        if($users==1){
            return $next($request);  
        }else{
            return redirect('/home');
        }

    }
}
