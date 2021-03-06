<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Models\User;
use App\Http\Middleware\rifValidation;

class AuthController extends BaseController
{

    //Logear
    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['idRoles'] =  $authUser->idRoles;

            if ($authUser->idStatus == 53) {
                return $this->sendResponse('positive', 'Winwardium Leviosa', 100, $success);
            } else {
                return $this->sendResponse('warning', 'El email esta inactivo', 200, []);
            }
        } else {
            return $this->sendResponse('negative', 'El email o contraseña es incorrecto', 401, []);
        }
    }

    //Registrar
    public function signup(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'cpassword' => 'required|same:password',

        ]);

        //Asignamos a una variable el valor del json
        $input = $request->all();

        //Se valida si el json viene con parametro idRole
        $exists = Arr::exists($input, 'idRole');
        if (!$exists) {
            $input = Arr::add($input, 'idRoles', '5');
        }

        if ($validator->fails()) {
            return $this->sendResponse('warning', 'Error de validación', 200, $validator->errors());
        }

        //Encripta la contrasena
        $input['password'] = bcrypt($input['password']);
        $input = Arr::add($input, 'idStatus', 53);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['idRoles'] =  $user->idRoles;
        $success['id'] =  $user->id;
        $success['idStatus'] =  53;
        //status 53 = activo, 54 = inactivo, 55 = pendiente, 56 = procesado

        return $this->sendResponse('positive', 'Usuario creado satisfactoriamente.', 100, $success);
    }
}