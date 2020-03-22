<?php

namespace App\Providers;

class Twitter
{

    protected $apiKey;
    
    public function _construct($apiKey)
    {
        $this->apiKey = $apikey;
    }
}