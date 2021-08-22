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
        try {
            $parish = DB::table('parish')->where('idMunicipality', $id)->select('id', 'parish')->get();

            if (sizeof($parish) != 0) {
                return $this->sendResponse('afirmative', 'Parroquias', 100, $parish);
            } else {
                return $this->sendResponse('warning', 'La Parroquia no es correcta', 200, []);
            }
        } catch (\Throwable $th) {
            return $this->sendResponse('negative', 'Parroquias', 400, $th);
        }
    }
}