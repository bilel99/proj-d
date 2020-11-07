<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AlertController;
use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\HeroBannerController;
use App\Http\Controllers\Front\PriceController;
use App\Http\Controllers\Front\ServicesController;
use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;
use App\Http\Controllers\Front\HomepageController;
use App\Http\Controllers\Front\HoraireController;
use App\Http\Controllers\Front\InformationController;
use App\Http\Controllers\Front\MedicalHouseController;

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
Route
    ::get(
        '/',
        [HomepageController::class, 'index']
    )->name('homepage');

/**
 * Appointment page
 */
Route
    ::get(
        '/comment-prendre-un-rendez-vous',
        [PagesController::class, 'appointment']
    )->name('appointement');

/**
 * Price page
 */
Route
    ::get(
        '/nos-tarifs',
        [PagesController::class, 'price']
    )->name('prices');

/**
 * contact page
 */
Route
    ::get(
        '/nous-contacter',
        [PagesController::class,
        'contact']
    )->name('contacts');


/**
 * Ajax Methods Hero Banner
 */
Route
    ::get(
        '/hero-banner-homepage',
        [HeroBannerController::class,
        'homeHeroBanner']
    )->name('ajax.hero-banner.homepage');

Route
    ::get(
        '/hero-banner-price',
        [HeroBannerController::class,
        'priceHeroBanner']
    )->name('ajax.hero-banner.price');

Route
    ::get(
        '/hero-banner-contact',
        [HeroBannerController::class,
        'contactHeroBanner']
    )->name('ajax.hero-banner.contact');


Route
    ::get(
        '/hero-banner-appointment',
        [HeroBannerController::class,
        'aboutHeroBanner']
    )->name('ajax.hero-banner.appointment');


/**
 * Ajax method Informations
 */
Route
    ::get(
        '/ajax-informations',
        [InformationController::class,
        'informations']
    )->name('ajax.informations');

/**
 * Ajax method Alert
 */
Route
    ::get(
        '/ajax-find-alert/{alert}',
        [AlertController::class,
        'findAlert']
    )->name('ajax.find.alert');

/**
 * Ajax method Horaire
 */
Route
    ::get(
        '/ajax-horaires',
        [HoraireController::class,
        'horaires']
    )->name('ajax.horaires');

/**
 * Ajax method Page MedicalHouse
 */
Route
    ::get(
        '/ajax-medical-house',
        [MedicalHouseController::class,
        'medicalHouse']
    )->name('ajax.medicalHouse');

/**
 * Ajax method MedicalHouse
 */
Route
    ::get(
        '/ajax-get-house/{house}',
        [MedicalHouseController::class,
        'getHouse']
    )->name('ajax.get.house');

/**
 * Ajax method Price
 */
Route
    ::get(
        '/ajax-prices',
        [PriceController::class,
            'getPrices']
    )->name('ajax.get.prices');

/**
 * Ajax method Appointment
 */
Route
    ::get(
        '/ajax-appointment',
        [AppointmentController::class,
            'getAppointment']
    )->name('ajax.get.appointment');

/**
 * Ajax method About
 */
Route
    ::get(
        '/ajax-about',
        [AboutController::class,
            'getAbout']
    )->name('ajax.get.about');

/**
 * Ajax method Services
 */
Route
    ::get(
        '/ajax-services',
        [ServicesController::class,
            'getServices']
    )->name('ajax.get.services');
