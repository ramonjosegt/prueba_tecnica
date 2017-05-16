<?php

use App\Http\Controllers\SolicitudController;
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

// Controlador home
Route::get('/', 'HomeController@index');

Route::get('huesped/{dni}', 'HuespedController@create');
Route::post('huesped/register', 'HuespedController@store');

Route::get('reservas/huesped/{dni}', 'HuespedController@create');
Route::get('reservas/register', 'ReservasController@getRooms');
Route::get('reservas/{dni}', 'ReservasController@show');

