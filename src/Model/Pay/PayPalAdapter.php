<?php

declare(strict_types=1);

namespace App\Model\Pay;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $paypal;

    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }
    
    public function pay(int $amount)
    {
        $this->paypal->sendPayment($amount);
    }
}