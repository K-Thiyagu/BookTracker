<?php

use App\Http\Controllers\BookTrackerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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



Route::get('/', [BookTrackerController::class, 'main']);

Route::get('/book', [BookTrackerController::class, 'book']);

Route::post('/bookpage', [BookTrackerController::class, 'insertbook']);

Route::get('/bookedit/{id}', [BookTrackerController::class, 'bookedit']);

Route::post('/bookupdate/{id}', [BookTrackerController::class, 'bookupdate']);

Route::get('bookdelete/{id}', [BookTrackerController::class, 'bookdel']);

Route::get('/reader', [BookTrackerController::class, 'reader']);

Route::post('/readerkpage', [BookTrackerController::class, 'insertReader']);

Route::get('/readeredit/{id}', [BookTrackerController::class, 'readeredit']);

Route::post('/update/{id}', [BookTrackerController::class, 'readerupdate']);

Route::get('readerdelete/{id}', [BookTrackerController::class, 'readerdel']);

Route::get('/takeout', [BookTrackerController::class, 'takeout']);

Route::post('/takepage', [BookTrackerController::class, 'inserttake']);

Route::get('/takeeditpage/{id}', [BookTrackerController::class, 'TakeOutEdit']);

Route::post('/updateEdit/{id}', [BookTrackerController::class, 'Takeupdate']);

Route::get('/indexbook', [BookTrackerController::class, 'indexbook']);

Route::post('/indexbook', [BookTrackerController::class, 'book_filter']);

Route::get('/indexreader', [BookTrackerController::class, 'indexreader']);

Route::post('/indexreader', [BookTrackerController::class, 'reader_filter']);

Route::get('/indextake', [BookTrackerController::class, 'indextake']);

Route::post('/indextake', [BookTrackerController::class, 'take_filter']);

Route::get('/past/{id}', [BookTrackerController::class, 'past']);

Route::get('/history/{id}', [BookTrackerController::class, 'history']);

// Route::post('indextake', [BookTrackerController::class, 'fliter'])->name('/filter');

