<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EnterpriseController;
use App\Http\Controllers\API\PersonController;
use App\Http\Controllers\API\AddressController;
use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\MunicipalityController;
use App\Http\Controllers\API\ParishController;
use App\Http\Controllers\API\StateController;
use App\Http\Controllers\API\EntitySubClassController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);
Route::post('enterprise', [EnterpriseController::class, 'store']);
Route::post('person', [PersonController::class, 'store']);
Route::post('address', [AddressController::class, 'store']);
Route::post('cathegory', [EntitySubClassController::class, 'addCathegory']);
Route::get('country', [CountryController::class, 'index']);
Route::get('city/{city}', [CityController::class, 'index']);
Route::get('municipality/{municipality}', [MunicipalityController::class, 'index']);
Route::get('parish/{parish}', [ParishController::class, 'index']);
Route::get('state/{state}', [StateController::class, 'index']);
Route::get('getSubClass/{subClass}', [EntitySubClassController::class, 'getForID']);
Route::get('getBanks', [EntitySubClassController::class, 'getBanks']);
Route::get('getMethodPay', [EntitySubClassController::class, 'getMethodPay']);
Route::get('getCathegory', [EntitySubClassController::class, 'getCathegory']);
Route::get('getPresentation', [EntitySubClassController::class, 'getPresentation']);
Route::get('getCurrency', [EntitySubClassController::class, 'getCurrency']);
Route::get('getTax', [EntitySubClassController::class, 'getTax']);
Route::get('getDiscounts', [EntitySubClassController::class, 'getDiscounts']);
Route::get('getStatus', [EntitySubClassController::class, 'getStatus']);

// Route::middleware('auth:sanctum')->group( function () {
//     //Route::resource('blogs', BlogController::class);
// });