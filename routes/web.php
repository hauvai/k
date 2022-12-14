<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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
Route::resource('home',FoodController::class);
route::get('/detail/{id}',[FoodController::class, 'show']);
route::get('/detail/{id}/edit',[FoodController::class, 'show']);
Route::get('add',[FoodController::class, 'store']);

