<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\BudgetController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/user', [UserController::class, 'user'])->middleware('auth:api');

//Route::put('/user/{id}', [UserController::class, 'update']);
//Route::delete('/user/{id}', [UserController::class, 'destroy']);
//Route::get('/user/{id}', [UserController::class, 'show']);
//Route::get('/users', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'register']);



Route::get('/budget', [BudgetController::class, 'budget']);
