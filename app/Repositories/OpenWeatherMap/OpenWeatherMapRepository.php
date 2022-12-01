<?php

namespace App\Repositories\OpenWeatherMap;

use App\Repositories\Interfaces\OpenWeatherMapInterface;
use Illuminate\Support\Facades\Http;

class OpenWeatherMapRepository implements OpenWeatherMapInterface
{
    /**
     * @var void
     */

    public function __construct(

    )
    {
        // better to place this in env or aws secret manager
        $this->key = "20a3b5b781c7fe931b795c77172d16c8";
        $this->url = 'https://api.openweathermap.org/data/2.5/weather';
    }

    public function getWeatherData($data)
    {
        try {
            $response = Http::get($this->url, [
                'lon' => $data['lon'],
                'lat' => $data['lat'],
                'apiKey' => $this->key,
                'units'  => 'metric'
            ]);

            return $response;
        } catch (\Exception $e) {
            return false;
        }
    }
    
}
