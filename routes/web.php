<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', fn() => view('home'))->name('home');

// Login
Route::view('/login/login', 'login.login')->name('login.login');

// Konsep Definisi
Route::view('/konsep/dasar', 'konsep.dasar')->name('konsep.dasar');
Route::view('/konsep/nilai', 'konsep.nilai')->name('konsep.nilai');
Route::view('/konsep/model', 'konsep.model')->name('konsep.model');

// Indikator
Route::view('/indikator/priker', 'indikator.priker')->name('indikator.priker');
Route::view('/indikator/leadbo', 'indikator.leadbo')->name('indikator.leadbo');
Route::view('/indikator/pebo', 'indikator.pebo')->name('indikator.pebo');
Route::view('/indikator/sysbo', 'indikator.sysbo')->name('indikator.sysbo');

// Form Penilaian
Route::view('/form/budaya', 'form.budaya')->name('form.budaya');
Route::view('/form/teladan', 'form.teladan')->name('form.teladan');

// Hasil Penilaian
Route::view('/hasil/budaya', 'hasil.budaya')->name('hasil.budaya');
Route::view('/hasil/teladan', 'hasil.teladan')->name('hasil.teladan');

// Galeri
Route::view('/galeri/foto', 'galeri.foto')->name('galeri.foto');
Route::view('/galeri/piagam', 'galeri.piagam')->name('galeri.piagam');
Route::view('/galeri/manual', 'galeri.manual')->name('galeri.manual');

// Galeri
Route::get('/galeri/foto', function () {
    return view('galeri.foto');
})->name('galeri.foto');

Route::get('/galeri/piagam', function () {
    return view('galeri.piagam');
})->name('galeri.piagam');

Route::get('/galeri/manual', function () {
    return view('galeri.manual');
})->name('galeri.manual');

