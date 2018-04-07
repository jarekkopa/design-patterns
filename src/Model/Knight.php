<?php

namespace App\Model;

class Knight
{
    private $weapon;
    private $movement;

    public function __construct(string $weapon, string $movement)
    {
        $this->weapon = $weapon;
        $this->movement = $movement;
    }

    public function __toString(): string
    {
        return 'Rycerz';
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function getMovement()
    {
        return $this->movement;
    }
}