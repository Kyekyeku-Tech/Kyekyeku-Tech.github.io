<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class BankCardCheck
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
        if (!Auth::user()->bank_card) {
            $notify[] = ['warning', 'Setup Bank Card at first!'];
            return to_route('user.bank.card')->withNotify($notify);
        }

        return $next($request);
    }
}
