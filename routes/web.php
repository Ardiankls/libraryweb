<?php

use App\Http\Controllers\BookController;
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


Route::get('/borrowlist', function () {
    return view('borrowlist', [
        'title' => 'Borrow List',
    ]);
});

Route::get('/collection/{book:slug}', [BookController::class, 'show']);
