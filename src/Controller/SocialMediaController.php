<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Model\SocialMedia\Facade\SocialMediaFacade;

class SocialMediaController extends Controller{
    public function share()
    {
        $socialMediaFacade = new SocialMediaFacade();
        \dump('test');
        return $this->render('socialmedia.html.twig', [
        'social' => $socialMediaFacade->share('www.onet.pl', 'Super strona')]);
    }
}