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

        try {
            $state = DB::table('state')->where('idCountry', $id)->select('id', 'state')->get();

            if (sizeof($state) != 0) {
                return $this->sendResponse('afirmative', 'Estados', 100, $state);
            } else {
                return $this->sendResponse('warning', 'El Estado no es correcto', 200, []);
            }
        } catch (\Throwable $th) {
            return $this->sendResponse('negative', 'Estados', 400, $th);
        }
    }
}