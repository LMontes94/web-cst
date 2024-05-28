<?php

use App\Http\Controllers\KnowUsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class,'index'])->name('index');
Route::get('/contact', [MainController::class,'contact'])->name('contact');
Route::get('/admission', [MainController::class,'admission'])->name('admission');

Route::get('/knowus/staff', [KnowUsController::class,'staff'])->name('staff');
Route::get('/knowus/general-letter', [KnowUsController::class,'generalLetter'])->name('general-letter');
Route::get('/knowus/definition', [KnowUsController::class,'definition'])->name('definition');
Route::get('/knowus/history', [KnowUsController::class,'history'])->name('history');