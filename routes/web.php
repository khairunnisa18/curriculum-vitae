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
    return view('welcome');
});

Route::get('home', function () {
    return view('main');
});

Route::get('/portofolio/portofolio-1', function () {
    return view('portofolio.portofolio-1');
});

Route::get('/portofolio/portofolio-2', function () {
    return view('portofolio.portofolio-2');
});

Route::get('/portofolio/home', function () {
    return view('portofolio.home');
})->name('home');
