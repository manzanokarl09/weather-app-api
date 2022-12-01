<?php

namespace App\Repositories\Geoapify;

use App\Repositories\Interfaces\GeoapifyInterface;
use Illuminate\Support\Facades\Http;

class GeoapifyRepository implements GeoapifyInterface
{
    /**
     * @var void
     */

    public function __construct(

    )
    {
        // better to place this in env or aws secret manager
        $this->key = "6b4baa568e5845879b35ea2518e956d2";
        $this->url = 'https://api.geoapify.com/v1/geocode/search';
    }

    public function getLocationData($data)
    {
        try {
            $response = Http::get($this->url, [
                'text' => $data['text'],
                'apiKey' => $this->key
            ]);

            return $response;
        } catch (\Exception $e) {
            return false;
        }
    }
    
}
