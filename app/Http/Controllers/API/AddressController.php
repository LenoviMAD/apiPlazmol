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
use App\Models\Address;

class AddressController extends BaseController
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
            $dataUser = DB::table('users')->where('email', $input['email'])->select('id', 'idRoles')->first();

            if ($dataUser != null) {
                $input = Arr::add($input, 'idUser', $dataUser->id);

                $validator = Validator::make($request->all(), [
                    'description' => 'required',
                    'idState' => 'required',
                    'idCity' => 'required',
                    'idCountry' => 'required',
                    'idParish' => 'required',
                    // 'confirm_password' => 'required|same:password',
                ]);
                Address::create($input);
            } else {
                return $this->sendResponse('warning', 'Usuario no encontrado', 401, $dataUser);
            }
        } else {
            return $this->sendResponse('warning', 'Indique el email', 401, $validator->errors());
        }

        return $this->sendResponse('positive', 'Dirección registrada correctamente', 100, []);
    }
}