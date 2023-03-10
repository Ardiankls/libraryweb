<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserBorrowsController;
use App\Models\Book;
use App\Models\User;
use App\Models\user_borrows;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('collection', [
//         'title' => 'Collection',
//     ]);
// });

Route::get('/', [BookController::class, 'index']);
Route::get('/collection/', [BookController::class, 'index']);


// Route::get('/borrowlist', function () {
//     return view('borrowlist', [
//         'title' => 'Borrow List',
//         'collections' => Book::all(),
//         'users' => User::all()
//     ]);
// });
Route::resource('userborrow', UserBorrowsController::class);
Route::get('/collection/{book:slug}', [BookController::class, 'show']);
