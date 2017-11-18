<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['api']], function ()
{
    Route::any('/mailgun/store', ['as' => 'mail.store', 'uses' => 'MailgunController@store']);

    Route::group(['namespace' => 'Api\v1', 'prefix' => 'v1'], function() {
        Route::post('register', 'AuthController@register');
        Route::post('login', 'AuthController@login');
        Route::post('recover', 'AuthController@recover');

        Route::group(['middleware' => ['jwt.auth']], function () {
            Route::get('logout', 'AuthController@logout');
        });
    });
});
