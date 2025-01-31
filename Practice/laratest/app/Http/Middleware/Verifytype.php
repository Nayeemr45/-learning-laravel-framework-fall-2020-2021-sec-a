<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Verifytype
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->get('type') == 'admin'){
            return $next($request);
         }else{
             $request->session()->flash('msg', 'admin only');
             return redirect('/home');
         }
    }
}
