<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController1;
use App\Http\Controllers\PostController;


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

Route::get('log-out', [Controller::class, 'logOut'])->name('log-out');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [Controller::class, 'profile'])->name('profile');
//    Route::post('test', [apiController::class, 'authorRequest'])->name('test');
});
Route::post('test', [ApiController1::class, 'authorRequest'])->name('test');
Route::get('add-post', [PostController::class, 'webIndex'])->name('add-post');

Route::resource('post', PostController::class);

