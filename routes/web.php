<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CarsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PageController::class,'index']);
    //elérési út kontroller osztály   függvény

Route::get('/passing-data',[PageController::class,'passingData']);

Route::get('/cars',[CarsController::class,'index']);
Route::post('/cars/search-by-name',[CarsController::class,'searchByName']);
Route::post('/cars/search-by-origin',[CarsController::class,'searchByOrigin']);

