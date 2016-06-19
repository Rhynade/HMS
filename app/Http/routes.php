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


Route::get('/maintenance/display', 'MaintenanceController@index');

Route::get('/maintenance/form', 'MaintenanceController@create');

Route::post('/maintenance/received', 'MaintenanceController@publish');




Route::get('/room_draw', 'RoomDrawController@index');
