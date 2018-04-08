<?php

declare(strict_types=1);

namespace App\Model\Pizza\Decorator;

class ChickenPizzaDecorator extends AbstractPizzaDecorator
{
    public function ingredients()
    {
        return $this->plainPizza->ingredients() . ' + kurczak';
    }
}