<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/announcement/display', 'AnnouncementController@index');

Route::get('/announcement/form', 'AnnouncementController@create');


Route::post('/announcement/display', 'AnnouncementController@publish');

Route::get('/maintenance_report', 'MaintenanceController@index');

Route::get('/room_draw', 'RoomDrawController@index');
