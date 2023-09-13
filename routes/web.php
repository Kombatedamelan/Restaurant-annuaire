<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegistersController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/liste', [PagesController::class, 'liste'])->name('liste');
Route::get('/userRegister', [RegistersController::class, "userRegisterIndex"])->name("UserRegister");
Route::post('/userRegister', [RegistersController::class, "userRegister"])->name('userRegister.store');

Route::get('/liste', [PagesController::class, 'liste'])->name('liste'); 

Route::group(["middleware" => ["verified"]], function () {
    //  Mettre les routes qui sont protégees par le fait que la ai verifié son compte
    
    Route::get('/dashboard', [PresterController::class, "index"])->name('prester.index');   
});
    
Route::group(["middleware" => ["auth"]], function () {
    //  Mettre les routes qui sont protégees par le fait que la ai verifié son compte
    Route::get('/restaurant', [PagesController::class, 'restaurant'])->name('restaurant.Index');
    Route::post('/restaurant', [PagesController::class, 'restaurantStore'])->name('restaurantStore');

    
});


require_once "admin.php";
require_once "prester.php";