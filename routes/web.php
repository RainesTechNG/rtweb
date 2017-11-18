<?php

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

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

Route::get('user/verify/{verification_code}', 'Api\v1\AuthController@verifyUser');

Route::group(['middleware' => ['web']], function () {
    Route::get('/logout', ['as' => 'logout', 'uses' => 'HomeController@logout']);
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/contact-us', ['as' => 'contact', 'uses' => 'HomeController@contact']);
    Route::post('/contact-us', ['as' => 'contact.post', 'uses' => 'HomeController@contactPost']);
    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'services'], function () {
        Route::get('/{service?}', ['as' => 'services', 'uses' => 'ServicesController@index']);
        Route::post('/rfs', ['as' => 'services.request', 'uses' => 'ServicesController@rfs']);
    });

    Route::group(['prefix' => 'about-us'], function () {
        Route::get('/{about?}', ['as' => 'about', 'uses' => 'HomeController@about']);
    });

    Route::group(['prefix' => 'newsletter'], function () {
        Route::post('/subscribe', ['as' => 'newsletter.subscribe', 'uses' => 'NewsletterController@subscribe']);
    });
});
