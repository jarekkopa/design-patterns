<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class ArcherController extends Controller{
    public function attack()
    {
        return $this->render('archer.html.twig');
    }
}