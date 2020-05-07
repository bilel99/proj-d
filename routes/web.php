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
    return view('front.home.index');
})->name('homepage');

Route::get('/comment-prendre-un-rendez-vous', function () {
    return view('welcome');
})->name('appointement');

Route::get('/tarifs', function () {
    return view('welcome');
})->name('tarifs');
