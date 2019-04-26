<?php

namespace App\Http\Middleware;

use Closure;
use App\categories;
class VerifyCategoriesCount
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
        if(categories::all()->count() == 0)
        {
            session()->flash('error','There is no categories. You need to add categories first');
            return redirect('/home');
        }
        return $next($request);
    }
}
