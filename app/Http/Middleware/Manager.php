<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Auth;

class Manager
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
        $user_id=Auth::user()->id;
        $user_det=User::find($user_id);
        if($user_det->manager==1){
            return $next($request);
        }
        else{
            return Redirect()->back();
        }
    }
}
