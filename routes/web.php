<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\NewsSourceController;

Route::get('/', [PublicController::class, 'index'])->name('index');

Route::get('/top-headlines-usa', [NewsController::class, 'top_usa'])->name('news.top_usa');
Route::get('/news/tech', [NewsController::class, 'techNews'])->name('news.tech');
Route::get('/news/apple', [NewsController::class, 'appleNews'])->name('news.apple');
Route::get('/news/bitcoin', [NewsController::class, 'bitcoin'])->name('news.bitcoin');

Route::get('/news/sources', [NewsSourceController::class, 'sources'])->name('news.sources');
