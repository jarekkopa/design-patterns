<?php

declare(strict_types=1);

namespace App\Model\Pay;

interface PaymentAdapterInterface
{
    public function pay(int $amount);
}