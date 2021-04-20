<?php

use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;

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

Route::get('vehiculos', [VehiculoController::class, 'index']);

Route::post('vehiculo', [VehiculoController::class, 'store']);

Route::get('vehiculo/{by}', [VehiculoController::class, 'search']);

Route::get('vehiculo/brand/{brand}', [VehiculoController::class, 'getCountVehiclesByBrand']);
