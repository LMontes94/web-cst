<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EducationalProposalController;
use App\Http\Controllers\InicialController;
use App\Http\Controllers\KnowUsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostsTypeController;
use App\Http\Controllers\PrimariaController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SecundariaController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffPositionController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/admission', [MainController::class, 'admission'])->name('admission');

Route::get('/knowus/staff', [KnowUsController::class, 'staff'])->name('staff');
Route::get('/knowus/general-letter', [KnowUsController::class, 'generalLetter'])->name('general-letter');
Route::get('/knowus/definition', [KnowUsController::class, 'definition'])->name('definition');
Route::get('/knowus/history', [KnowUsController::class, 'history'])->name('history');
Route::get('/knowus/commitment', [KnowUsController::class, 'commitment'])->name('commitment');

Route::get('educational-proposal/english', [EducationalProposalController::class, 'english'])->name('english');
Route::get('educational-proposal/ateneo', [EducationalProposalController::class, 'ateneo'])->name('ateneo');

Route::get('educational-proposal/our-levels', [EducationalProposalController::class, 'ourLevels'])->name('levels');
Route::get('educational-proposal/our-levels/inicial', [InicialController::class, 'inicial'])->name('inicial');
Route::get('educational-proposal/our-levels/inicial/science', [InicialController::class, 'science'])->name('inicial-science');
Route::get('educational-proposal/our-levels/inicial/physical-ed', [InicialController::class, 'physicalEducation'])->name('inicial-physical');
Route::get('educational-proposal/our-levels/inicial/music', [InicialController::class, 'music'])->name('inicial-music');
Route::get('educational-proposal/our-levels/inicial/english', [InicialController::class, 'english'])->name('inicial-english');
Route::get('educational-proposal/our-levels/inicial/documents', [InicialController::class, 'document'])->name('inicial-document');

Route::get('educational-proposal/our-levels/primaria', [PrimariaController::class, 'primaria'])->name('primaria');
Route::get('educational-proposal/our-levels/primaria/team', [PrimariaController::class, 'team'])->name('primaria-team');
Route::get('educational-proposal/our-levels/primaria/english', [PrimariaController::class, 'english'])->name('primaria-english');
Route::get('educational-proposal/our-levels/primaria/events', [PrimariaController::class, 'event'])->name('primaria-events');

Route::get('educational-proposal/our-levels/secundaria', [SecundariaController::class, 'secundaria'])->name('secundaria');
Route::get('educational-proposal/our-levels/secundaria/team', [SecundariaController::class, 'team'])->name('secundaria-team');
Route::get('educational-proposal/our-levels/secundaria/guidance-team', [SecundariaController::class, 'guidanceTeam'])->name('secundaria-guidance-team');
Route::get('educational-proposal/our-levels/secundaria/std-council', [SecundariaController::class, 'studenCouncil'])->name('secundaria-std-council');
Route::get('educational-proposal/our-levels/secundaria/workshop', [SecundariaController::class, 'workshop'])->name('secundaria-workshop');
Route::get('educational-proposal/our-levels/secundaria/sample', [SecundariaController::class, 'sample'])->name('secundaria-sample');
Route::get('educational-proposal/our-levels/secundaria/output', [SecundariaController::class, 'output'])->name('secundaria-output');
Route::get('educational-proposal/our-levels/secundaria/physical-ed', [SecundariaController::class, 'physicalEducation'])->name('secundaria-physical');
Route::get('educational-proposal/our-levels/secundaria/english', [SecundariaController::class, 'english'])->name('secundaria-english');
Route::get('educational-proposal/our-levels/secundaria/document', [SecundariaController::class, 'document'])->name('secundaria-document');
Route::get('educational-proposal/our-levels/secundaria/regulations', [SecundariaController::class, 'regulation'])->name('secundaria-regulation');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('dashboard/ejemplo', [DashboardController::class, 'ejemplo'])->name('ejemplo');
    Route::get('dashboard/abms', [DashboardController::class, 'abms'])->name('abms');

    Route::resource('/users', UsersController::class);

    Route::resource('staff', StaffController::class);
    Route::resource('staff_positions', StaffPositionController::class);

    Route::resource('sections', SectionController::class);
    Route::resource('department', DepartmentController::class);

    Route::resource('/user-type', UserTypeController::class)->names([
        'index' => 'userType.index',
        'create' => 'userType.create',
        'store' => 'userType.store',
        'show' => 'userType.show',
        'edit' => 'userType.edit',
        'update' => 'userType.update',
        'destroy' => 'userType.destroy'
    ]);

    Route::resource('/post-type', PostsTypeController::class)->names([
        'index' => 'postType.index',
        'create' => 'postType.create',
        'store' => 'postType.store',
        'show' => 'postType.show',
        'edit' => 'postType.edit',
        'update' => 'postType.update',
        'destroy' => 'postType.destroy'
    ]);
});