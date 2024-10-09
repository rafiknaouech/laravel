<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransporteurController;
use App\Http\Controllers\VehiculeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [TransporteurController::class, 'index']);
Route::resource('transporteurs', TransporteurController::class);
Route::resource('vehicules', VehiculeController::class);
