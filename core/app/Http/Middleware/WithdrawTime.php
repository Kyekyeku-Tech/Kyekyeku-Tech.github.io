<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
class WithdrawTime
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
        $time1 = "10:00 am";
        $time2 = "04:00 pm";
        $check1 = Carbon::now() > Carbon::parse($time1);
        $check2 = Carbon::now() < Carbon::parse($time2);

        if ($check1 && $check2) {
            return $next($request);
        }else{
            $notify[] = ['info', 'Withdraw time is '.$time1.' to '.$time2.' | Please Wait..'];
            return back()->withNotify($notify);
        }
    }
}
