<?php

use App\Http\Controllers\CronController;
use Illuminate\Support\Facades\Route;
Route::middleware(['web2','maintenance'])->group(function(){
    Route::get('/clear', function () {
        \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    });

    // User Support Ticket
    Route::controller('TicketController')->prefix('ticket')->name('ticket.')->group(function () {
        Route::get('/', 'supportTicket')->name('index');
        Route::get('new', 'openSupportTicket')->name('open');
        Route::post('create', 'storeSupportTicket')->name('store');
        Route::get('view/{ticket}', 'viewTicket')->name('view');
        Route::post('reply/{ticket}', 'replyTicket')->name('reply');
        Route::post('close/{ticket}', 'closeTicket')->name('close');
        Route::get('download/{ticket}', 'ticketDownload')->name('download');
    });

    Route::get('/teams-all', function(){
        return view("templates.basic.teams");
    })->name('all.teams');

    Route::get('app/deposit/confirm/{hash}', 'Gateway\PaymentController@appDepositConfirm')->name('deposit.app.confirm');

    Route::controller('SiteController')->group(function () {

        // online service
        Route::get('/online-service', 'onlineService')->name('online.service');

        
        // cron job
        Route::prefix('cron')->group(function(){
            Route::get('/check-active-plans', [CronController::class, 'checkActivePlans']);
        });

        //chats
        Route::get('/chats', 'chats')->name('chats');
        Route::get('/chats2', 'chats2')->name('chats2');

        Route::get('/contact', 'contact')->name('contact');
        Route::post('/contact', 'contactSubmit');
        Route::get('/change/{lang?}', 'changeLanguage')->name('lang');

        Route::get('cookie-policy', 'cookiePolicy')->name('cookie.policy');

        Route::get('/cookie/accept', 'cookieAccept')->name('cookie.accept');

        Route::get('blog/{slug}/{id}', 'blogDetails')->name('blog.details');

        Route::get('policy/{slug}/{id}', 'policyPages')->name('policy.pages');

        Route::get('placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');

        Route::get('company-policy/{id}/{slug}', 'SiteController@policy')->name('links');

        Route::get('plans', 'SiteController@plans')->name('plans');

        Route::get('blog', 'SiteController@blog')->name('blog');
        Route::get('blog-details/{id}', 'SiteController@blogDetail')->name('blogDetail');

        Route::get('/{slug}', 'pages')->name('pages');
        Route::get('/', 'index')->name('home');
    });
});
