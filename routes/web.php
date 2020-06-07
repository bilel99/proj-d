<?php

use Illuminate\Support\Facades\Route;
use Laravel\Nova\Nova;

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

/**
 * NOVA ROUTING
 */
Nova::routes();

/**
 * Abort route nova/login
 */
Route::get('nova/login', function () {
    return redirect()->route('login');
});

Route::get('/', function () {
    return view('front.home.index');
})->name('homepage');

Route::get('/comment-prendre-un-rendez-vous', function () {
    return view('front.appointement.index');
})->name('appointement');

Route::get('/tarifs', function () {
    return view('front.prices.index');
})->name('prices');

Route::get('/nous-contacter', function () {
    return view('front.contact.index');
})->name('contacts');
