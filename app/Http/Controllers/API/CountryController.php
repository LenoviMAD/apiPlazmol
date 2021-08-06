<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Http\Controllers\API\BaseController as BaseController;

class CountryController extends BaseController
{
    public function index(Request $request)
    {
        $country = Country::all();
        if ($country != null) {
            return $this->sendResponse('afirmative', 'Paises', 100, $country);
            //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
        } else {
            return $this->sendResponse('negative', 'Pais no encontrado', 401, $country);
        }
    }
}