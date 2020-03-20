<?php

namespace App\Providers;

class Twitter
{

    protected $apikey;
    public function _construct($apikey)
    {
        $this->apikey = $apikey;
    }
}