<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $gateway;

     public function __construct(\Braintree $braintree)
     {
         $this->gateway = new $braintree([
             'environment' => config('services.braintree.environment'),
             'merchantId' => config('services.braintree.merchantId'),
             'publicKey' => config('services.braintree.publicKey'),
             'privateKey' => config('services.braintree.privateKey')
         ]);
     }


    public function index()
    {
        return view('charge');
    }


    public function Charge()
    {



    }



}
