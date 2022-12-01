<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\OpenWeatherMapInterface;

class WeatherController extends Controller
{
    //
    public function __construct(OpenWeatherMapInterface $openWeatherMapInterface) {
		$this->openWeatherMapInterface = $openWeatherMapInterface;
	}

    public function getWeatherData(Request $request) {
        
        $data = $request->all();
    
		return $this->openWeatherMapInterface->getWeatherData($data);
    }
}
