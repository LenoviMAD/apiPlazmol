<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\EntitySubClass;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\DB;
use Validator;

class EntitySubClassController extends BaseController
{
    public function getForID(int $id)
    {

        $request = DB::table('entitySubClass')->where('idEntityClass', $id)->select('code', 'description')->get();
        $title = DB::table('entityClass')->where('id', $id)->select('description')->first();


        return $this->sendResponse('afirmative', $title->description, 100, $request);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function getBanks()
    {

        $banks = DB::table('entitySubClass')->where('idEntityClass', 1)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'Bancos', 100, $banks);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function getMethodPay()
    {

        $methodPay = DB::table('entitySubClass')->where('idEntityClass', 2)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'Modalidad de pago', 100, $methodPay);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function getCathegory()
    {

        $cathegory = DB::table('entitySubClass')->where('idEntityClass', 3)->select('code', 'description')->get();
        if ($cathegory->count() != 0) {
            return $this->sendResponse('afirmative', 'Categorias', 100, $cathegory);
        } else {
            return $this->sendResponse('warning', 'No se encontraron categorias', 400, $cathegory);
        }
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function getPresentation()
    {

        $presentation = DB::table('entitySubClass')->where('idEntityClass', 4)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'Presentaciones', 100, $presentation);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }
    public function getCurrency()
    {

        $currency = DB::table('entitySubClass')->where('idEntityClass', 5)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'Moneda', 100, $currency);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }
    public function getTax()
    {

        $tax = DB::table('entitySubClass')->where('idEntityClass', 6)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'IVA', 100, $tax);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }
    public function getDiscounts()
    {

        $discounts = DB::table('entitySubClass')->where('idEntityClass', 7)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'Modalidad de pago', 100, $discounts);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function getStatus()
    {

        $discounts = DB::table('entitySubClass')->where('idEntityClass', 8)->select('code', 'description')->get();

        return $this->sendResponse('afirmative', 'Estatus', 100, $discounts);
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addCathegory(Request $request)
    {
        //Asignamos a una variable el valor del json para manipularlo facilmente
        $input = $request->all();

        $exists = Arr::exists($input, 'email');
        if ($exists) {
            $dataUser = DB::table('users')->where('email', $input['email'])->select('id', 'idRoles')->first();
            $input = Arr::add($input, 'idEntityClass', 3);

            if ($dataUser != null) {
                $validator = Validator::make($request->all(), [
                    'description' => 'required',
                    'code' => 'required'
                    // 'confirm_password' => 'required|same:password',
                ]);
                EntitySubClass::create($input);
            } else {
                return $this->sendResponse('warning', 'Usuario no encontrado', 401, $dataUser);
            }
        } else {
            return $this->sendResponse('warning', 'Indique el correo electronico', 401, $input);
        }

        return $this->sendResponse('positive', 'Categoria creada correctamente', 100, []);
    }
}