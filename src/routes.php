<?php

use Illuminate\Support\Facades\Route;
use TNTLearn\Payment\Controllers\PaymentController;


Route::name('payment.')->group(function (){

    Route::get('sendPayment',[PaymentController::class,'index'])->name('sendPayment');
    Route::get('create',[PaymentController::class,'create'])->middleware(['accessToPayment'])->name('create');

});

