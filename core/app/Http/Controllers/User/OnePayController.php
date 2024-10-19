<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Deposit;
use App\Constants\Status;
use Illuminate\Http\Request;
use App\Models\GatewayCurrency;
use App\Models\AdminNotification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OnePayController extends Controller
{
    public function deposit(){
        $pageTitle = "Recharge";
        $user = Auth::user();
        $methods = GatewayCurrency::whereHas('method', function ($gate) {
            $gate->where('status', Status::ENABLE);
        })->with('method')->orderby('method_code')->get();
        return view('templates.basic.user.payment.onepay.deposit', compact('pageTitle', 'user', 'methods'));
    }

    public function checkout(){
        $pageTitle = "Check Out";
        $user = Auth::user();
        return view('templates.basic.user.payment.custom.checkout', compact('pageTitle', 'user'));
    }

    public function depositSubmitAPI(Request $request){
        // dd($request->all());
        $request->validate([
            'user_id' => 'required|numeric|gt:0',
            'amount' => 'required|numeric|gt:0',
            'method_id' => 'required|numeric|gt:0',
            'currency' => 'required',
        ]);

        $checkTxn = Deposit::where('transaction_id', $request->transaction_id)->first();

        if($checkTxn) {
            return response()->json(['msg'=>"Transaction ID already exists.", 'cls'=>'error']);
        }

        $user = User::find($request->user_id);
        if (!$user) {
            $notify = 'Invalid User!';
            return response()->json(['msg'=>$notify, 'cls'=>'error']);
        }
        $gate = GatewayCurrency::whereHas('method', function ($gate) {
            $gate->where('status', Status::ENABLE);
        })->where('method_code', $request->method_id)->where('currency', $request->currency)->first();

        if (!$gate) {
            $notify = 'Invalid gateway';
            return response()->json(['msg'=>$notify, 'cls'=>'error']);
        }

        if ($gate->min_amount > $request->amount || $gate->max_amount < $request->amount) {
            $notify = 'Please follow deposit limit';
            return response()->json(['msg'=>$notify, 'cls'=>'error']);
        }

        $charge = $gate->fixed_charge + ($request->amount * $gate->percent_charge / 100);
        $payable = $request->amount + $charge;
        $final_amo = $payable * $gate->rate;

        $deposit = new Deposit();
        $deposit->user_id = $user->id;
        $deposit->method_code = $gate->method_code;
        $deposit->method_currency = strtoupper($gate->currency);
        $deposit->amount = $request->amount;
        $deposit->transaction_id = $request->transaction_id;
        $deposit->user_number = $request->user_number;
        $deposit->charge = $charge;
        $deposit->rate = $gate->rate;
        $deposit->final_amo = $final_amo;
        $deposit->btc_amo = 0;
        $deposit->btc_wallet = "";
        $deposit->trx = getTrx();
        $deposit->payment_try = 0;
        $deposit->status = 2;
        $deposit->save();

        levelCommission($user, $deposit->amount, 'deposit_commission', $deposit->trx);

        $isManual = true;

        $adminNotification = new AdminNotification();
        $adminNotification->user_id = $deposit->user->id;
        $adminNotification->title = 'Deposit request from ' . $deposit->user->username;
        $adminNotification->click_url = urlPath('admin.deposit.details', $deposit->id);
        $adminNotification->save();

        notify($deposit->user, 'DEPOSIT_REQUEST', [
            'method_name' => $deposit->gatewayCurrency()->name,
            'method_currency' => $deposit->method_currency,
            'method_amount' => showAmount($deposit->final_amo),
            'amount' => showAmount($deposit->amount),
            'charge' => showAmount($deposit->charge),
            'rate' => showAmount($deposit->rate),
            'trx' => $deposit->trx
        ]);

        $notify = 'Deposit Submit Successfully';
        return response()->json(['msg'=>$notify, 'cls'=>'success']);

    }

    public function getMethodsAPI(){
        $methods = GatewayCurrency::whereHas('method', function ($gate) {
            $gate->where('status', Status::ENABLE);
        })->with('method')->orderby('method_code')->get();

        return response()->json(['cls'=>'success', 'data'=>$methods]);
    }



    // public function testApi(Request $request){
    //     dd($request->all());
    //     $user = User::find($request->user_id);
    //     $gate = GatewayCurrency::where('method_code', $request->method_id)->first();
    //     if (!$gate) {
    //         $notify = 'Invalid gateway';
    //         return response()->json(['msg'=>$notify, 'cls'=>'error']);
    //     }
    //     $charge = $gate->fixed_charge + ($request->amount * $gate->percent_charge / 100);
    //     $payable = $request->amount + $charge;
    //     $final_amo = $payable * $gate->rate;

    //     $deposit = new Deposit();
    //     $deposit->user_id = $user->id;
    //     $deposit->method_code = $gate->method_code;
    //     $deposit->method_currency = strtoupper($gate->currency);
    //     $deposit->amount = $request->amount;
    //     $deposit->charge = $charge;
    //     $deposit->rate = $gate->rate;
    //     $deposit->final_amo = $final_amo;
    //     $deposit->btc_amo = 0;
    //     $deposit->btc_wallet = "";
    //     $deposit->trx = getTrx();
    //     $deposit->payment_try = 0;
    //     $deposit->status = 0;
    //     $deposit->save();

    //     $notify = 'Deposit Submit Successfully';
    //     return response()->json(['msg'=>$notify, 'cls'=>'success']);

    // }
}
