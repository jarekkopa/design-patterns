<?php

declare(strict_types=1);

namespace App\Model\Pay;

class PayPal
{
    public function sendPayment(int $amount)
    {
        echo "Wysyłam platnosc {$amount} PLN do PayPal.";
    }
}