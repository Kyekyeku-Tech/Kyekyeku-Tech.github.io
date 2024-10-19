<?php

use App\Http\Controllers\User\OnePayController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::namespace('Api')->name('api.')->group(function () {
    Route::post('deposit-sumbit', [OnePayController::class, 'depositSubmitAPI'])->name('deposit.submit');
    Route::get('get-methods', [OnePayController::class, 'getMethodsAPI'])->name('get.methods');

    Route::post('test', [OnePayController::class, 'testApi']);
    // Route::post('test', function(){
    //     return response()->json(['hi'=>'hello']);
    // });
});

// http://paytaka-gateway.test/cash-deposit?amount=550.00&&method=bkash&&method_id=1000&&cur_sym=$&&cur_text=Taka&&user_id=1&&admin_number=01740898877&&post_api=https://miningjs.test/api/deposit-submit&&method_img=https://seeklogo.com/images/B/bkash-logo-FBB258B90F-seeklogo.com.png
