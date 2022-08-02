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
    return view('pages.index');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/service', function () {
    return view('pages.services');
})->name('service');
Route::get('/anonce', function () {
    return view('pages.anonce');
})->name('anonce');
Route::get('/rdv', function () {
    return view('pages.rdv');
})->name('rdv');
Route::get('/pub', function () {
    return view('pages.pub');
})->name('pub');
