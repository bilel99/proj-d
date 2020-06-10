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

/**
 * homepage
 */
Route::get('/', 'HomepageController@index')->name('homepage')->middleware('auth');

/**
 * About page
 */
Route::get('/comment-prendre-un-rendez-vous', function () {
    return view('front.appointement.index');
})->name('appointement');

/**
 * Price page
 */
Route::get('/tarifs', function () {
    return view('front.prices.index');
})->name('prices');

/**
 * contact page
 */
Route::get('/nous-contacter', function () {
    return view('front.contact.index');
})->name('contacts');
