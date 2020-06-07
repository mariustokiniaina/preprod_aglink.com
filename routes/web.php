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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('homepage', 'HomeController@index')->name('homepage');

Route::get('view-all-ag','AssembleeController@index')->name('assemble-gle');
Route::get('view-all-immeuble','ImmeubleController@index')->name('immeuble');
Route::get('view-all-gestionnaire','GestionnaireController@index')->name('gestionnaire');

Route::get('view-detail-ag/{id}','AssembleeController@show')->name('assemble-gle-detail');
Route::get('view-detail-immeuble/{id}','ImmeubleController@show')->name('immeuble-detail');
Route::get('view-detail-gestionnaire/{id}','GestionnaireController@show')->name('gestionnaire-detail');