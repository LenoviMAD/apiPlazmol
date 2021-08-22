<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Controllers\API\BaseController as BaseController;

class CountryController extends BaseController
{
    public function index()
    {
        try {
            $country = Country::all();

            if (sizeof($country) != 0) {
                return $this->sendResponse('afirmative', 'Paises', 100, $country);
            } else {
                return $this->sendResponse('warning', 'El Pais no es correcto', 200, []);
            }
        } catch (\Throwable $th) {
            return $this->sendResponse('negative', 'Paises', 400, $th);
        }
    }
}