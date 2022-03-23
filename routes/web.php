<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', 'FrontendController@index')->name('index');
Route::get('/vechicles/listings', 'FrontendController@listings')->name('vehicles');
Route::get('/vehicles/{slug}', 'FrontendController@vehicle')->name('vehicle');
Route::get('/vehicles/search', 'FrontendController@search')->name('search');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/edit', 'HomeController@edit')->name('profile.edit');
Route::post('/profile/edit', 'HomeController@updateProfile')->name('profile.update');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/users', 'HomeController@users')->name('users');
Route::get('/user/{id}', 'HomeController@user')->name('user');

Route::get('/vehicle', 'VehicleController@index')->name('vehicle.index');
Route::get('/vehicle/create', 'VehicleController@create')->name('vehicle.create');
Route::post('/vehicle', 'VehicleController@store')->name('vehicle.store');
Route::get('/vehicle/{id}', 'VehicleController@show')->name('vehicle.show');
Route::get('/approve-vehicle/{id}', 'VehicleController@approveVehicle')->name('vehicle.approve');
Route::get('/json-model', 'VehicleController@model');
Route::get('/vehicle/edit/{id}', 'VehicleController@edit')->name('vehicle.edit');
Route::post('/vehicle/{id}', 'VehicleController@update')->name('vehicle.update');
Route::get('/vehicles', 'VehicleController@allVehicles')->name('vehicle.all');
