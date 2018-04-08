<?php

declare(strict_types=1);

namespace App\Model\Pizza\Decorator;

class AbstractPizzaDecorator
{
    protected $plainPizza;

    public function __construct($plainPizza)
    {
        $this->plainPizza = $plainPizza;
    }
}