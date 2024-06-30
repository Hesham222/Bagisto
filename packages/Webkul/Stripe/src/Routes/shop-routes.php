<?php

use Illuminate\Support\Facades\Route;
use WebKul\Stripe\Http\Controllers\Shop\StripeController;

Route::group(['middleware' => ['web', 'theme', 'locale', 'currency'], 'prefix' => 'stripe'], function () {
    Route::get('', [StripeController::class, 'index'])->name('shop.stripe.index');
});
