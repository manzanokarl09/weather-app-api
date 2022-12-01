<?php

namespace App\Repositories\Interfaces;

/**
 * Interface OpenWeatherMapInterface
 * Contains all reusable functions within the application
 * @package App\Repositories\Interfaces
 */
interface OpenWeatherMapInterface
{
	public function getWeatherData($data);
}
