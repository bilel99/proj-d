<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'middleware' => ['auth:api'], //api_token is needed in the request
        'namespace' => 'Api', // Api Folder in Http\Controller
    ],
    function () {
    }
);

Route::group(
    [
        'namespace' => 'Api', // Api Folder in Http\Controller
    ],
    function () {
        //apiResource let you to have show, store, update, delete (GET, POST, PUT, DELETE)
        Route::apiResources(
            [
                'user' => 'UserController',
                'alert' => 'AlertController',
                'contact' => 'ContactController',
                'doctor' => 'DoctorController',
                'horaire' => 'HoraireController',
                'information' => 'InformationController',
                'medicalHouse' => 'MedicalHouseController',
                'price' => 'PriceController',
                'page' => 'PageController',
                'service' => 'ServiceController',
                'society' => 'SocietyController',
                'infosMedicalHouse' => 'InfoMedicalHouseController',
            ]
        );

        /**
         * Others Pages
         */
        Route::get('get-relations-page/{page}', 'PageController@getRelations')->name('get.relations.page');

        /**
         * All Relations Houses
         */
        Route::get('get-relations-house/{house}', 'MedicalHouseController@getRelations')->name('get.relations.house');

        /**
         * All Relations Infos table
         */
        Route::get('get-relations-information/{information}', 'InformationController@getRelations')->name('get.relations.information');
        Route::get('get-all-informations', 'InformationController@findAll')->name('get.all.information');

        /**
         * Relations to Price table
         */
        Route::get('get-relations-price/{price}', 'PriceController@getRelations')->name('get.relations.price');

        /**
         * Medias
         */
        Route::get('retrieve-media/{id}', 'MediaController@get')->name('get.retrieve.media');
    }
);
