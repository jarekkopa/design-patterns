<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class KnightController extends Controller{
    public function attack()
    {
        return $this->render('knight.html.twig');
    }
}