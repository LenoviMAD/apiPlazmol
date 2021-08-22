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

            if (sizeof($municipality) != 0) {
                return $this->sendResponse('afirmative', 'Municipio', 100, $municipality);
            } else {
                return $this->sendResponse('warning', 'El municipio no es correcta', 200, []);
            }

            //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
        } catch (\Throwable $th) {
            return $this->sendResponse('negative', 'Municipio', 400, $th);
        }
    }
}