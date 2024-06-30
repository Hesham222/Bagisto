<?php

use Illuminate\Support\Facades\Route;
use Webkul\Fawry\Http\Controllers\Admin\FawryController;

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin/fawry'], function () {


    Route::controller(FawryController::class)->group(function () {
        Route::get('', 'index')->name('admin.fawry.index');

        Route::get('/payments/verify/{payment?}',[FawryController::class,'payment_verify'])->name('verify-payment');

    });


});
