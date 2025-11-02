<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WinnerController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FooterLinkController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LegalBaseController;
use App\Http\Controllers\CulturalModelController;
use App\Http\Controllers\CoreValueController;
use App\Http\Controllers\LeadBOIndicatorController;
use App\Http\Controllers\PeBOIndicatorController;
use App\Http\Controllers\PrikerController;
use App\Http\Controllers\SysboController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PertanyaanBudayaController;
use App\Http\Controllers\PertanyaanTeladanController;
use App\Http\Controllers\FotoController;

// Home
Route::view('/', 'home')->name('home');

// Login & Logout
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login')->name('login.post');
    Route::post('/logout', 'logout')->name('logout');
});

// Konsep
Route::get('/konsep/dasar', [LegalBaseController::class, 'publicIndex'])->name('konsep.dasar');
Route::get('/konsep/nilai', [CoreValueController::class, 'publicIndex'])->name('konsep.nilai');
Route::get('/konsep/model', [CulturalModelController::class, 'publicIndex'])->name('konsep.model');

// Indikator
Route::get('/leadbo', [LeadBOIndicatorController::class, 'publicIndex'])->name('indikator.leadbo');
Route::get('/pebo', [PeBOIndicatorController::class, 'publicIndex'])->name('indikator.pebo');
Route::get('/priker', [PrikerController::class, 'publicIndex'])->name('indikator.priker');
Route::get('/sysbo', [SysboController::class, 'publicIndex'])->name('indikator.sysbo');

// Form Penilaian
Route::get('/budaya', [PertanyaanBudayaController::class, 'publicIndex'])->name('form.budaya');
Route::get('/teladan', [PertanyaanTeladanController::class, 'publicIndex'])->name('form.teladan');

// Hasil Penilaian
Route::prefix('hasil')->name('hasil.')->group(function () {
    Route::view('/budaya', 'hasil.budaya')->name('budaya');
    Route::view('/teladan', 'hasil.teladan')->name('teladan');
});

// Galeri
Route::get('/galeri/foto', [FotoController::class, 'publicIndex'])->name('galeri.foto');
Route::prefix('galeri')->name('galeri.')->group(function () {
    Route::view('/piagam', 'galeri.piagam')->name('piagam');
    Route::view('/manual', 'galeri.manual')->name('manual');
});

// ====================
// ADMIN AREA (Role: admin)
// ====================
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('legal-bases', LegalBaseController::class)->except(['show']);
        Route::resource('settings', SettingController::class);
        Route::resource('footers', FooterController::class);
        Route::resource('footer-links', FooterLinkController::class);
        Route::resource('winners', WinnerController::class);
        Route::resource('cultural-models', CulturalModelController::class);
        Route::resource('core-values', CoreValueController::class);
        Route::resource('leadbo', LeadBOIndicatorController::class);
        Route::resource('pebo', PeBOIndicatorController::class);
        Route::resource('priker', PrikerController::class);
        Route::resource('sysbo', SysboController::class);
        Route::resource('budaya', PertanyaanBudayaController::class);
        Route::resource('teladan', PertanyaanTeladanController::class);
        Route::resource('galeri', FotoController::class)->parameter('galeri', 'foto');
    });
