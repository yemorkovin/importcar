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
Route::get('/catalog', [IndexController::class, 'catalog']);
Route::get('/catalog/{id}', [IndexController::class, 'catalogindex']);
Route::get('/page/{slug}', [IndexController::class, 'pageslug']);
Route::post('/ajaxfilter', [IndexController::class, 'ajaxfilter']);
Route::post('/ajaxszayavka', [IndexController::class, 'ajaxszayavka']);
//Route::get('/ajaxpage/{id}', [IndexController::class, 'ajaxpage']);
//Route::get('/category/{slug}', [IndexController::class, 'categoryslug']);

//Route::get('/ob-avtore', [IndexController::class, 'obavtore']);


//Route::get('/post/{slug}', [IndexController::class, 'postslug']);

//Route::post('/addcomment', [IndexController::class, 'addcomment']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
