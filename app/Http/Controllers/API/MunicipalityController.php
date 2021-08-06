<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

class MunicipalityController extends BaseController
{
    public function index(int $id)
    {
        try {
            $municipality = DB::table('municipality')->where('idState', $id)->select('id', 'municipality')->get();

            return $this->sendResponse('afirmative', 'Ciudades', 100, $municipality);
            //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
        } catch (\Throwable $th) {
            return $this->sendResponse('negative', 'Ciudades', 400, $th);
        }
    }
}