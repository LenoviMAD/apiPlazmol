<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\City;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

class CityController extends BaseController
{
    public function index(int $id)
    {
        try {
            $City = DB::table('city')->where('idState', $id)->select('id', 'city')->get();

            if (sizeof($City) != 0) {
                return $this->sendResponse('afirmative', 'Ciudades', 100, $City);
            } else {
                return $this->sendResponse('warning', 'La ciudad no es correcta', 200, []);
            }
        } catch (\Throwable $th) {
            return $this->sendResponse('negative', 'Ciudades', 400, $th);
        }
    }
}