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

        $City = DB::table('city')->where('idState', $id)->select('id', 'city')->get();

        return $this->sendResponse('afirmative', 'Ciudades', 100, $City);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }
}