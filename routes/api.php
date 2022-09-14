<?php

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\apiController;
use App\Http\Controllers\ApiController1;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::middleware('auth:sanctum')->get('profile2', [Controller::class, 'profile2'])->name('profile2');
Route::post('test1', [apiController::class, 'authorRequest']);
Route::resource('test2' , ApiController1::class);
Route::resource('post' , PostController::class);


