<?php

namespace App\Http\Controllers;

use App\Models\RuningPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CronController extends Controller
{
    public function checkActivePlans(){
        // code to check active plans and update status if needed.
        $runing_plans = RuningPlan::where('status', 1)->whereDate('validity', '<', Carbon::today())->get();
        foreach ($runing_plans as $plan){
            $plan->status = 0; // Expire
            $plan->save();
        }
        return 'Done';
    }
}
