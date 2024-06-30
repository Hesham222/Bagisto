<?php

use Illuminate\Support\Facades\Route;
use Webkul\Shop\Http\Controllers\StripeController;


    Route::get('/admin/check', [StripeController::class,'checkout']);


//Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/shop'], function () {
//

//});
