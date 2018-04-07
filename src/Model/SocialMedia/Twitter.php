<?php

declare(strict_types=1); 

namespace App\Model\SocialMedia;

class Twitter
{
    public function tweet($url, $status)
    {
        return "Twitter: " . $url . " Status: " . $status;
    }
}