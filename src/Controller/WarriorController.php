<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class WarriorController extends Controller{
    public function attack()
    {
        return $this->render('warrior.html.twig');
    }
}