<?php

namespace App\Controller;

use App\Model\Knight;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KnightController extends Controller{
    public function attack()
    {
        $knight = new Knight("miecz", 'konno');
        \dump($knight);
        
        return $this->render('knight.html.twig', [
            'knight' => $knight,
        ]);
    }
}