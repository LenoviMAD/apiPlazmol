<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\User;
use App\Models\Person;
use App\Models\Enterprise;
use App\Http\Middleware\rifValidation;

class EnterpriseController extends BaseController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Asignamos a una variable el valor del json para manipularlo facilmente
        $input = $request->all();

        $exists = Arr::exists($input, 'email');
        if ($exists) {


            $validator = Validator::make($request->all(), [
                'companyName' => 'required',
                'shortName' => 'required',
                'country' => 'required',
                'state' => 'required',
                'city' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'local' => 'required',
                'email' => 'required',
                'rif' => 'required',
                // 'confirm_password' => 'required|same:password',
            ]);
            Enterprise::create($input);
        } else {
            return $this->sendResponse('warning', 'Indique el correo electronico', 401, $validator->errors());
        }

        return $this->sendResponse('positive', 'Empresa registrada correctamente', 100, []);
    }
}