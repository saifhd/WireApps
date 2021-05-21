<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
class Cashier
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
        if($user_det->cashier==1){
            return $next($request);
        }
        else{
            return Redirect()->back();
        }
    }
}
