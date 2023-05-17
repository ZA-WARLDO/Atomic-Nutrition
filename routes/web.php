<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MealController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/workouts', [WorkoutController::class, 'index']);


Route::get('/lessons/{number}',[LessonsController::class, 'index']);

Route::get('/editInfo', [UserController::class, 'edit']);
Route::post('/info/update/{id}', [UserController::class, 'update']);




Route::post('/addFood', [MealController::class, 'store'])->name('store');
// Route::get('/register/page1', function () {
//     return view('registerPage1');
// });


Route::delete('/Summary/delete/{id}', [MealController::class, 'destroy'])->name('delete');
Route::get('/editFood', [MealController::class, 'edit'])->name('editFood');