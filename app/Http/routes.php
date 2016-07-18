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
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/email', function(){
});

//Announcements
Route::get('/announcement/display', 'AnnouncementController@index');

Route::get('/announcement/form', 'AnnouncementController@create');

Route::post('/announcement/display', 'AnnouncementController@publish');

Route::get('/announcement/{announcement}/edit', 'AnnouncementController@edit');

Route::patch('/announcement/{announcement}', 'AnnouncementController@update');

Route::get('/announcement/{announcement}/delete', 'AnnouncementController@delete');

//Maintenance
Route::get('/maintenance/display', 'MaintenanceController@index');

Route::get('/maintenance/{report}','MaintenanceController@index1');

Route::patch('/maintenance/display', 'MaintenanceController@update');

Route::get('/maintenance/form', 'MaintenanceController@create');

Route::post('/maintenance/received', 'MaintenanceController@publish');

Route::get('/maintenance/display/{report}', 'MaintenanceController@show');



//Commments

Route::post('/maintenance/display/{report}', 'CommentsController@store');


//RoomDraw
Route::get('/roomdraw', 'RoomDrawController@index');

Route::post('/roomdraw', 'RoomDrawController@bid');


//Import & Export Excel
Route::get('importExport','ExcelController@importExport');

Route::get('downloadExcel/{type}','ExcelController@downloadExcel');

Route::post('importExcel', 'ExcelController@importExcel');