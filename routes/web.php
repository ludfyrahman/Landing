<?php

use App\Http\Controllers\BackOffice\AbsensiController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackOffice\DashboardController;
use App\Http\Controllers\BackOffice\UserController;
use App\Http\Controllers\BackOffice\TeachersController;
use App\Http\Controllers\BackOffice\AgendaController;
use App\Http\Controllers\BackOffice\JobFairController;
use App\Http\Controllers\BackOffice\MajorsController;
use App\Http\Controllers\BackOffice\SlidersController;
use App\Http\Controllers\BackOffice\GalleryController;
use App\Http\Controllers\BackOffice\SchoolProfileController;
use App\Http\Controllers\SiteController;
use App\Models\Voucher;

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
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/profilSchool', [SiteController::class, 'profile'])->name('profileSchool');
Route::get('/programs', [SiteController::class, 'programs'])->name('programs');
Route::get('/teacher', [SiteController::class, 'teachers'])->name('teachers');
Route::get('/works', [SiteController::class, 'works'])->name('works');
Route::middleware(['auth',  'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profil', [UserController::class, 'profile'])->name('profile');
    Route::post('/profil', [UserController::class, 'updateProfile']);
    Route::resource('user', UserController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('teachers', TeachersController::class);
    Route::resource('sliders', SlidersController::class);
    Route::resource('jobFair', JobFairController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('majors', MajorsController::class);
    Route::resource('profile', SchoolProfileController::class);
});
