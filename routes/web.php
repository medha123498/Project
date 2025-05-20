<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Resource Routes for Books (CRUD operations)
Route::resource('books', BookController::class);

// You can also create other custom routes as needed
// Example: Route for searching books
Route::get('books/search', [BookController::class, 'search'])->name('books.search');
