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

Route::get('/', 'PagesController@home');
Route::get('/kontakta', 'PagesController@contact');


/*
|---- 
| Portal
|---
| / - Home
|
*/
Route::resource('/portal/employees', 'EmployeesController');

Route::get('/portal', 'PortalController@frontpage');
Route::auth();

Route::get('/home', 'HomeController@index');
