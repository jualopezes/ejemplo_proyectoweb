<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorsBookController;

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

Route::get("/books", [BookController::class, "index"])->name("books.index");
Route::post("/books", [BookController::class, "store"])->name("books.store");
Route::delete("/books/{id}", [BookController::class, "destroy"])->name("books.destroy");
Route::get("/books/{id}", [BookController::class, "edit"])->name("books.edit");
Route::put("/books/{id}", [BookController::class, "update"])->name("books.update");


Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/authors-books', [AuthorsBookController::class, 'index'])->name('authors_books.index');

Route::post('/authors-books', [AuthorsBookController::class, 'store'])->name('authors_books.store');

Route::delete('/authors-books/{id}', [AuthorsBookController::class, 'destroy'])->name('authors_books.destroy');