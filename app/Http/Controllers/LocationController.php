<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\GeoapifyInterface;

class LocationController extends Controller
{
    //
    public function __construct(GeoapifyInterface $geoapifyInterface) {
		$this->geoapifyInterface = $geoapifyInterface;
	}

    public function getLocationData(Request $request) {
        
        $data = $request->all();

		return $this->geoapifyInterface->getLocationData($data);
    }
}
