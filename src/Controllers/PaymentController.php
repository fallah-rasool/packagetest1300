<?php

namespace TNTLearn\Payment\Controllers;



use TNTLearn\Payment\Models\Finance;

class PaymentController  extends BaseController
{
  public function index()
  {
      $finance = Finance::all();
      return  $finance;
      $value=['ali','reza','rasool'];

      $merchantId = config('payment.merchantId');

      return view('payment::index',compact('value','merchantId'));
  }
  public function create(){
    $db= Finance::create([
          'merchantId'=>  config('payment.merchantId')
      ]);
    return $db;
  }

}
