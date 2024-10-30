<?php

use App\Http\Controllers\ComicController;
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

Route::get('/comics', [ComicController::class, 'index'])->name('comic.index');
Route::post('/comics', [ComicController::class, 'store'])->name('comic.store');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comic.create');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comic.show');
Route::put('/comics/{id}', [ComicController::class, 'update'])->name('comic.update');
Route::delete('/comics/{id}', [ComicController::class, 'destroy'])->name('comic.delete');
Route::get('/comics/{id}/edit', [ComicController::class, 'edit'])->name('comic.edit');
