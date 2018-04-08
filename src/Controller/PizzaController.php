<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Model\Pizza\PlainPizza;

class PizzaController extends Controller
{
    public function plain()
    {
        $plainPizza = new PlainPizza();
        return $this->render('pizza.html.twig', [
            'ingredients' => $plainPizza->ingredients(),
            ]);
    }

    public function chicken()
    {
        $plainPizza = new PlainPizza();
        return $this->render('pizza.html.twig', [
            'ingredients' => $plainPizza->ingredients(),
            ]);
    }

    public function salami()
    {
        
    }
}