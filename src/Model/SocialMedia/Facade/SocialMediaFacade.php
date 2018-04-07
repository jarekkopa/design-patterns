<?php

declare(strict_types=1); 

namespace App\Model\SocialMedia\Facade;

use App\Model\SocialMedia\Twitter;
use App\Model\SocialMedia\Google;
use App\Model\SocialMedia\Facebook;

class SocialMediaFacade
{
    /**
     * Klasa Twitter
     * 
     * @var \App\Model\SocialMedia
     */
    private $twitter;

    /**
     * Klasa Google
     * 
     * @var \App\Model\SocialMedia
     */
    private $google;

    /**
     * Klasa Facebook
     * 
     * @var \App\Model\SocialMedia
     */
    private $facebook;

    public function __construct()
    {
        $this->twitter = new Twitter;
        $this->google = new Google;
        $this->facebook = new Facebook;
    }

    public function share($url, $status)
    {
        echo $this->twitter->tweet($url, $status), PHP_EOL;
        echo $this->google->share($url), PHP_EOL;
        echo $this->facebook->share($url);
    }
}