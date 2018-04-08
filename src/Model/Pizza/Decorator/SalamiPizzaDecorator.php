<?php

declare(strict_types=1);

namespace App\Model\Pizza\Decorator;

class SalamiPizzaDecorator extends AbstractPizzaDecorator
{
    public function ingredients()
    {
        return 'salami';
    }
}