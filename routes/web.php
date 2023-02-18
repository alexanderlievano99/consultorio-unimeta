<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroUsuarioController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/ingresarusu', function () {
    return view('ingresarusu.register');
});*/

Route::get('/ingresarusu/register',[RegistroUsuarioController::class,'create']);
