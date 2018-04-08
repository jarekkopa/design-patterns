<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Model\Pay\PayPalAdapter;
use App\Model\Pay\PayPal;
use App\Model\Pay\PayUAdapter;
use App\Model\Pay\PayU;

class PaymentConttroler extends Controller
{
    public function pay(string $method)
    {
        // if($method === 'PayPal') {
        //     $adapter = new PayPalAdapter(new PayPal());
        // } else {
        //     $adapter = new PayUAdapter(new PayU());
        // }
        $adapterClassName = '\\App\\Model\\Pay\\' . ucfirst($method) . "Adapter";
        $paymentClassName = '\\App\\Model\\Pay\\' . $method;
        $adapter = new $adapterClassName(new $paymentClassName());
        $adapter->pay(10);
        die('');
    }
}