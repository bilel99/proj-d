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
Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('/comment-prendre-un-rendez-vous', 'HomepageController@index')->name('homepage.appointment');
Route::get('/tarifs', 'HomepageController@index')->name('homepage.tarifs');
Route::get('/contact', 'HomepageController@index')->name('homepage.contact');
