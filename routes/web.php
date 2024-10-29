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
Route::get('/comics/create', [ComicController::class, 'create'])->name('comic.create');
Route::post('/comics', [ComicController::class, 'store'])->name('comic.store');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comic.show');