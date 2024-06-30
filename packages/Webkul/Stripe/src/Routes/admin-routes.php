<?php

use Illuminate\Support\Facades\Route;
use Webkul\Stripe\Http\Controllers\Admin\StripeController;

Route::group(['middleware' => ['locale', 'theme', 'currency']], function () {

    Route::controller(StripeController::class)->prefix('stripe')->group(function () {

        Route::get('/index', 'index')->name('stripe.index');
        Route::post('/session', 'session')->name('stripe.session');
        Route::get('/success', 'success')->name('stripe.success');

    });


});
