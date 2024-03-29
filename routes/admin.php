<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::group(["prefix"=>"admin"], function(){
    Route::group(['middleware' => 'auth', 'admin_dashboard'], function () {
        Route::get('/dashboard', [UserController::class, "index"])->name('admin.index');
        
        //enregistrement des prestataitres
        Route::post('/user', [UserController::class, 'userStore'])->name("admin.users.store");
    });
});


