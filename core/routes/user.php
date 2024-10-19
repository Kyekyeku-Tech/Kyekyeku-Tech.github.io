<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\OnePayController;

Route::middleware(['web2','maintenance'])->prefix('user')->group(function(){
    Route::namespace('User\Auth')->name('user.')->group(function () {

        Route::controller('LoginController')->group(function () {
            Route::get('/login', 'showLoginForm')->name('login');
            Route::post('/login', 'login');
            Route::get('logout', 'logout')->name('logout');
        });

        Route::controller('RegisterController')->group(function () {
            Route::get('register', 'showRegistrationForm')->name('register');
            Route::post('register', 'register')->middleware('registration.status');
            Route::post('check-mail', 'checkUser')->name('checkUser');
        });

        Route::controller('ForgotPasswordController')->prefix('password')->name('password.')->group(function () {
            Route::get('reset', 'showLinkRequestForm')->name('request');
            Route::post('email', 'sendResetCodeEmail')->name('email');
            Route::get('code-verify', 'codeVerify')->name('code.verify');
            Route::post('verify-code', 'verifyCode')->name('verify.code');
        });

        Route::controller('ResetPasswordController')->group(function () {
            Route::post('password/reset', 'reset')->name('password.update');
            Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
        });

        Route::controller('SocialiteController')->group(function () {
            Route::get('social-login/{provider}', 'socialLogin')->name('social.login');
            Route::get('social-login/callback/{provider}', 'callback')->name('social.login.callback');
        });
    });

    Route::middleware('auth')->name('user.')->group(function () {
        //authorization
        Route::namespace('User')->controller('AuthorizationController')->group(function () {
            Route::get('authorization', 'authorizeForm')->name('authorization');
            Route::get('resend-verify/{type}', 'sendVerifyCode')->name('send.verify.code');
            Route::post('verify-email', 'emailVerification')->name('verify.email');
            Route::post('verify-mobile', 'mobileVerification')->name('verify.mobile');
            Route::post('verify-g2fa', 'g2faVerification')->name('go2fa.verify');
        });

        Route::middleware(['check.status'])->group(function () {

            Route::get('user-data', 'User\UserController@userData')->name('data');
            Route::post('user-data-submit', 'User\UserController@userDataSubmit')->name('data.submit');

            Route::middleware('registration.complete')->namespace('User')->group(function () {

                Route::controller('UserController')->group(function () {

                    Route::get('dashboard', 'home')->name('home');

                    //current user
                    Route::get('userDataApi', 'userDataApi')->name('data.api');

                    //2FA
                    Route::get('twofactor', 'show2faForm')->name('twofactor');
                    Route::post('twofactor/enable', 'create2fa')->name('twofactor.enable');
                    Route::post('twofactor/disable', 'disable2fa')->name('twofactor.disable');

                    //KYC
                    Route::get('kyc-form', 'kycForm')->name('kyc.form');
                    Route::get('kyc-data', 'kycData')->name('kyc.data');
                    Route::post('kyc-submit', 'kycSubmit')->name('kyc.submit');

                    //Report
                    Route::any('deposit/history', 'depositHistory')->name('deposit.history');
                    Route::get('transactions', 'transactions')->name('transactions');
                    Route::get('commissions', 'commissions')->name('commissions');
                    Route::get('teams', 'Teams')->name('teams');
                                        Route::get('teams-user', 'Teams')->name('referred');

                    Route::get('referred-users/{lev}', 'referredUsers')->name('refer.users');
                    Route::get('invite-users', 'inviteUsers')->name('invite');
                    Route::get('attachment-download/{fil_hash}', 'attachmentDownload')->name('attachment.download');

                    // bank-card
                    Route::get('bank-card', 'bankCard')->name('bank.card');
                    Route::post('bank-card-store', 'bankCardStore')->name('bank.card.store');
                    Route::get('bank-card-remove', 'bankCardRemove')->name('bank.card.remove');

                    //Plans
                    Route::post('plans/buy', 'buyPlan')->name('buyPlan');
                    Route::get('runing-plans', 'runingPlans')->name('runing.plans');


                    // new plan buy system
                    Route::post('buy-plan-new', 'buyPlanNew')->name('buy.plan.new');


                    //Balance Transfer
                    Route::get('transfer-balance', 'transfer')->name('transfer.balance');
                    Route::post('transfer-balance', 'transferSubmit');

                    // trading
                    Route::get('trading', 'trading')->name('trading');
                    Route::post('trading-profit', 'tradingProfit')->name('trading.profit');
                    Route::post('collect-profit', 'collectProfit')->name('collect.profit');

                });

                //Profile setting
                Route::controller('ProfileController')->group(function () {
                    Route::get('profile-setting', 'profile')->name('profile.setting');
                    Route::post('profile-setting', 'submitProfile');
                    Route::get('change-password', 'changePassword')->name('change.password');
                    Route::post('change-password', 'submitPassword');
                    Route::get('payment-password', 'paymentPassword')->name('payment.password');
                    Route::post('payment-password', 'submitPaymentPassword');
                });


                // Withdraw
                Route::controller('WithdrawController')->prefix('withdraw')->name('withdraw')->group(function () {
                    Route::middleware('kyc')->group(function () {
                        Route::get('/', 'withdrawMoney');
                        Route::post('/', 'withdrawStore')->name('.money');
                        Route::get('preview', 'withdrawPreview')->name('.preview');
                        Route::post('preview', 'withdrawSubmit')->name('.submit');

                        //new
                        Route::get('/new', 'newWithdraw')->name('.new')->middleware(['bank_card']);
                        Route::post('/new-now', 'newWithdrawNow')->name('.new.now');

                        // fund pass
                        Route::get('/fund-pass', 'fundPass')->name('.fund.pass');
                        Route::post('/fund-pass-store', 'fundPassStore')->name('.fund.pass.store');

                    });
                    Route::get('history', 'withdrawLog')->name('.history');
                });

                //PTC
                Route::controller('PtcController')->name('ptc.')->prefix('ptc')->group(function () {
                    Route::get('/', 'index')->name('index');
                    Route::get('show/{hash}', 'show')->name('show');
                    Route::post('confirm/{hash}', 'confirm')->name('confirm');
                    Route::get('my-ads', 'ads')->name('ads');
                    Route::get('create', 'create')->name('create');
                    Route::post('store', 'store')->name('store');
                    Route::get('edit/{id}', 'edit')->name('edit');
                    Route::post('update/{id}', 'update')->name('update');
                    Route::get('status/{id}', 'status')->name('status');
                    Route::get('clicks', 'clicks')->name('clicks');
                    Route::post('report', 'reportSubmit')->name('report.submit');
                    Route::get('engagement/{id}', 'engagement')->name('engagement');
                });
            });

            // Payment
            Route::middleware('registration.complete')->prefix('deposit')->name('deposit.')->controller('Gateway\PaymentController')->group(function () {
                Route::any('/', 'deposit')->name('index');
                Route::post('insert', 'depositInsert')->name('insert');
                Route::get('confirm', 'depositConfirm')->name('confirm');
                Route::get('manual', 'manualDepositConfirm')->name('manual.confirm');
                Route::post('manual', 'manualDepositUpdate')->name('manual.update');
            });

            // Onepay Payment
            Route::middleware('registration.complete')->prefix('onepay')->name('onepay.')->controller(OnePayController::class)->group(function () {
                Route::any('/', 'deposit')->name('index');
                Route::get('/checkout', 'checkout')->name('checkout');

            });
        });
    });
});

