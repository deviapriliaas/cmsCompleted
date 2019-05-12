<?php

namespace App\Http\Middleware;

use Closure;

class VerifyIsIklan
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
        if(!auth()->user()->isIklan()){
            session()->flash('error','This Featured Just For Bussiness, sorry');
            return redirect('/home');
        }
        return $next($request);
    }
}
