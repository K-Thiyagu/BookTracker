<?php

use App\Http\Controllers\BookTrackerController;
use App\Models\Takeout;
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

// Route::get('/', function () {
//     // return view('welcome');
// });

  Route::get('/',[BookTrackerController::class,'main']);

  Route::get('/book',[BookTrackerController::class,'book']);

  Route::post('/bookpage',[BookTrackerController::class,'insertbook']);

  Route::get('/reader',[BookTrackerController::class,'reader']);

  Route::post('/readerkpage',[BookTrackerController::class,'insertReader']);

  Route::get('/takeout',[BookTrackerController::class,'takeout']);

  Route::post('/takepage',[BookTrackerController::class,'inserttake']);

  Route::get('/indexbook',[BookTrackerController::class,'indexbook']);

  Route::get('/indexreader',[BookTrackerController::class,'indexreader']);



