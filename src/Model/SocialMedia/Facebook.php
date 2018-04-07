<?php

declare(strict_types=1); 

namespace App\Model\SocialMedia;

class Facebook
{
    public function share($url)
    {
        return "Facebook: " . $url;
    }
}