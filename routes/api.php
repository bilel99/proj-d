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
                'page' => 'PageController',
                'service' => 'ServiceController',
                'society' => 'SocietyController',
                'transport' => 'TransportController',
            ]
        );
    }
);
