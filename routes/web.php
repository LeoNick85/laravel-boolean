<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/dopoilcorso', function () {
    return view('dopo');
})->name('dopo');

Route::get('/lezione-gratuita', function () {
    return view('lezione');
})->name('lezione');

Route::get('/assumi-studenti', function () {
    return view('assunzioni');
})->name('assunzioni');

Route::get('/candidati', function () {
    return view('candidature');
})->name('candidature');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/lavora-con-noi', function () {
    return view('lavora');
})->name('lavora');

Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');
