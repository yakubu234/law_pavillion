<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'clients'], function () {
    Route::get('/',[ClientController::class,'index'])->name('clients.index');
    Route::get('get',[ClientController::class,'show']);
    Route::post('create',[ClientController::class,'create']);
    Route::put('update',[ClientController::class,'update']);
});

