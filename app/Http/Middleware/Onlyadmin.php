<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Onlyadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // disini kita ngasih tau apa yang harus di lakukan kalau  akun bukan admin
        if (Auth::user()->role_id != 1){
            return redirect('/');
        }
         // apa yang di lakukan middleware kalau akun yg login adalah admin..?
        return $next ($request);
    }
}
