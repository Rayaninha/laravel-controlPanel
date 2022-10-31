<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

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

Route::post('createuser', [UserController::class, 'create']);
Route::get('selectuser', [UserController::class, 'selectOne']);
Route::get('selectusers', [UserController::class, 'selectAll']);
Route::get('updateuser', [UserController::class, 'update']);
Route::delete('deleteuser', [UserController::class, 'delete']);

Route::post('createarticle', [ArticleController::class, 'create']);
Route::get('selectarticle', [ArticleController::class, 'selectOne']);
Route::get('selectarticles', [ArticleController::class, 'selectAll']);
Route::get('updatearticle', [ArticleController::class, 'update']);
Route::delete('deletearticle', [ArticleController::class, 'delete']);