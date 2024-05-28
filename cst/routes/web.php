<?php

use App\Http\Controllers\EducationalProposalController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\KnowUsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PrimariaController;
use App\Http\Controllers\SecundariaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/admission', [MainController::class, 'admission'])->name('admission');

Route::get('/knowus/staff', [KnowUsController::class, 'staff'])->name('staff');
Route::get('/knowus/general-letter', [KnowUsController::class, 'generalLetter'])->name('general-letter');
Route::get('/knowus/definition', [KnowUsController::class, 'definition'])->name('definition');
Route::get('/knowus/history', [KnowUsController::class, 'history'])->name('history');
Route::get('/knowus/commitment', [KnowUsController::class, 'commitment'])->name('commitment');

Route::get('educational-proposal/our-levels', [EducationalProposalController::class, 'ourLevels'])->name('levels');


Route::get('educational-proposal/our-levels/inicial', [InicialController::class, 'inicial'])->name('inicial');
Route::get('educational-proposal/our-levels/primaria', [PrimariaController::class, 'primaria'])->name('primaria');
Route::get('educational-proposal/our-levels/secundaria', [SecundariaController::class, 'secundaria'])->name('secundaria');
