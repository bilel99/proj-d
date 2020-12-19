<?php

use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\AlertController;
use App\Http\Controllers\Front\AppointmentController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HeroBannerController;
use App\Http\Controllers\Front\PriceController;
use App\Http\Controllers\Front\ServicesController;
use Laravel\Nova\Nova;
use Illuminate\Support\Facades\Route;
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
Route::view('/', 'front.home.index')->name('homepage');

/**
 * Appointment page
 */
Route::view('/comment-prendre-un-rendez-vous', 'front.appointement.index')->name('appointement');

/**
 * Price page
 */
Route::view('/nos-tarifs', 'front.prices.index')->name('prices');

/**
 * Contact page
 */
Route::view('/nous-contacter', 'front.contact.index')->name('contacts');

/**
 * Ajax Methods Hero Banner homepage
 */
Route
    ::get(
        '/hero-banner-homepage',
        [HeroBannerController::class,
        'homeHeroBanner']
    )->name('ajax.hero-banner.homepage');

/**
 * Ajax method Hero Banner price
 */
Route
    ::get(
        '/hero-banner-price',
        [HeroBannerController::class,
        'priceHeroBanner']
    )->name('ajax.hero-banner.price');

/**
 * Ajax method Hero Banner contact
 */
Route
    ::get(
        '/hero-banner-contact',
        [HeroBannerController::class,
        'contactHeroBanner']
    )->name('ajax.hero-banner.contact');

/**
 * Ajax method Hero Banner appointment
 */
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
 * Ajax method Price refound
 */
Route
    ::get(
        '/ajax-prices-refound',
        [PriceController::class,
            'getPriceRefound']
    )->name('ajax.get.prices.refound');

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
 * Ajax method Appointment doctors
 */
Route
    ::get(
        '/ajax-appointment-doctors',
        [AppointmentController::class,
            'getAppointmentDoctors']
    )->name('ajax.get.appointment.doctors');

/**
 * Ajax method Appointment rdv
 */
Route
    ::get(
        '/ajax-appointment-rdv',
        [AppointmentController::class,
            'getAppointmentRdv']
    )->name('ajax.get.appointment.rdv');

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

/**
 * Ajax method Contact
 */
Route
    ::get(
        '/ajax-contact',
        [ContactController::class,
            'contactPage']
    )->name('ajax.contact');

/**
 * Ajax method Contact civility
 */
Route
    ::get(
        '/ajax-contact-civility',
        [ContactController::class,
            'getElementsToContact']
    )->name('ajax.contact.civility');

/**
 * Ajax method Contact create
 */
Route
    ::post(
        '/ajax-contact-create',
        [ContactController::class,
            'create']
    )->name('ajax.contact.create');
