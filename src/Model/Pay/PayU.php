<?php

declare(strict_types=1);

namespace App\Model\Pay;

class PayU
{
    public function doPayment(float $amount)
    {
        echo "Wysyłam platnosc {$amount} PLN do PayU.";
    }
}