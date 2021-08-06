<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;

class StateController extends BaseController
{
    public function index(int $id)
    {

        $state = DB::table('state')->where('idCountry', $id)->select('id', 'state')->get();

        if ($state != null) {
            return $this->sendResponsee('afirmative', 'Estados', 100, $state);
        } else {
            return $this->sendResponse('negative', 'Parroquia no encontrado', 401, $state);
        }
    }
}