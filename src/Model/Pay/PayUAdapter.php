<?php

declare(strict_types=1);

namespace App\Model\Pay;

class PayUAdapter implements PaymentAdapterInterface
{
    private $payu;

    public function __construct(PayU $payu)
    {
        $this->payu = $payu;
    }
    
    public function pay(int $amount)
    {
        $this->payu->doPayment($amount);
    }
}