<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

class ParishController extends BaseController
{
    public function index(int $id)
    {

        $parish = DB::table('parish')->where('idMunicipality', $id)->select('id', 'parish')->get();


        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
        if ($parish != null) {
            return $this->sendResponse('afirmative', 'Parroquias', 100, $parish);
            //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
        } else {
            return $this->sendResponse('negative', 'Parroquia no encontrado', 401, $parish);
        }
    }
}