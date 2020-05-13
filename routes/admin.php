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

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');

/**
 * Resource Laravel
 */
Route::resource('/admin/users', 'UsersController');
Route::resource('/admin/doctors', 'DoctorsController');
Route::resource('/admin/contacts', 'ContactsController')->except('create', 'store', 'edit', 'update');
Route::resource('/admin/horaires', 'SchedulesController')->except('create', 'show', 'edit');
Route::resource('/admin/pages', 'PagesController')->except('create', 'store', 'destroy');
Route::resource('/admin/alerts', 'AlertsController')->except('create', 'show', 'edit');