<?php

declare(strict_types=1); 

namespace App\Model\SocialMedia;

class Google
{
    public function share($url)
    {
        return "Google: " . $url;
    }
}