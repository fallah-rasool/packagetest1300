<?php

namespace TNTLearn\Payment;

use Illuminate\Support\ServiceProvider;
use TNTLearn\Payment\Middleware\CheckAccess;

class PaymentServiceProvider extends ServiceProvider
{
    public function register()
    {
//        $this->app->bind('payment',function(){
//            return  new Payment;
//        });

        $this->app->bind('payment');

        $this->mergeConfigFrom(__DIR__.'\config.php','payment');



    }

    public function boot(){
        require __DIR__.'\routes.php';
        $this->loadViewsFrom(__DIR__.'\views','payment');
        $this->publishes([
            __DIR__.'/config.php'=>config_path('payment.php')  ,
            __DIR__.'/views'=>base_path('resources/views/payment') ,
            __DIR__.'/Migrations'=>database_path('migrations')  ,
        ]);
        $this->app['router']->aliasMiddleware('accessToPayment',CheckAccess::class);
    }
}
