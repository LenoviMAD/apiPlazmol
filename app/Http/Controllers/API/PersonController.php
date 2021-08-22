<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\rifValidation;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\User;
use App\Models\Person;
use App\Models\Enterprise;
use App\Http\Controllers\API\BaseController as BaseController;

class PersonController extends BaseController
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
            $input = Arr::add($input, 'idUser', $dataUser->id);
            //Verificamos que el rif sea correcto
            // if (!rifValidation::validacion($input['rif'])) {
            //     return $this->sendError('warning', 'El Rif es incorrecto', 400, $input['rif']);
            // }

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'surname' => 'required',
                'birthday' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->sendResponse('warning', 'Error de validación', 200, $validator->errors());
            }
            //Guardamos en la tabla person
            $person = Person::create($input);
        } else {
            return $this->sendResponse('warning', 'Indique el nombre de usuario', 401, $exists);
        }

        return $this->sendResponse('positive', 'Usuario registrado correctamente', 100, []);
    }
}