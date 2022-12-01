<?php

namespace App\Repositories\Interfaces;

/**
 * Interface GeoapifyInterface
 * Contains all reusable functions within the application
 * @package App\Repositories\Interfaces
 */
interface GeoapifyInterface
{
	public function getLocationData($data);
}
