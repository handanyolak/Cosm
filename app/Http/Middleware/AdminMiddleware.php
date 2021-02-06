<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        if (auth()->user()->admin == 0){
            toastr()->error('Bu sayfayı görmeye yetkiniz yok!','Hata');
            return redirect()->route('homepage');
        }
        return $next($request);
    }
}
