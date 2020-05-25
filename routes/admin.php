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
})->name('dashboard')->middleware('auth');

/**
 * Resource Laravel
 */
Route::resource('/admin/users', 'UsersController')->middleware('auth');
Route::resource('/admin/doctors', 'DoctorsController')->middleware('auth');
Route::resource('/admin/contacts', 'ContactsController')->except('create', 'store', 'edit', 'update')->middleware('auth');
Route::resource('/admin/horaires', 'SchedulesController')->except('create', 'show', 'edit')->middleware('auth');
Route::resource('/admin/pages', 'PagesController')->except('create', 'store', 'show', 'destroy')->middleware('auth');
Route::resource('/admin/services', 'ServicesController')->except('create', 'show', 'edit')->middleware('auth');
Route::resource('/admin/informations', 'InfosController')->except('show')->middleware('auth');
Route::resource('/admin/medical-house', 'MedicalHouseController')->middleware('auth');
Route::resource('/admin/transports', 'TransportsController')->except('create', 'show', 'edit')->middleware('auth');
Route::resource('/admin/alerts', 'AlertsController')->except('create', 'show', 'edit')->middleware('auth');
Route::resource('/admin/society', 'SocietyController')->except('create', 'show', 'edit', 'destroy')->middleware('auth');