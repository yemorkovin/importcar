<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
Route::get('/', [IndexController::class, 'index']);

//регистрация и авторизация
Route::post('/reg', [IndexController::class, 'reg']);
Route::post('/auth', [IndexController::class, 'auth']);

Route::get('/logout', [IndexController::class, 'logout']);

Route::post('/editprofile', [IndexController::class, 'editprofile']);

Route::get('/policy', [IndexController::class, 'policy']);
Route::get('/return', [IndexController::class, 'defreturn']);
Route::get('/rules', [IndexController::class, 'rules']);
Route::get('/bets/{id}', [IndexController::class, 'bets']);
Route::get('/bets/{idsport}/{idtourn}', [IndexController::class, 'betsid']);
Route::get('/bets/{idsport}/{idtourn}/{idgame}', [IndexController::class, 'betsgameid']);


//временный маршрут для проверок
Route::get('/t', [IndexController::class, 't']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
