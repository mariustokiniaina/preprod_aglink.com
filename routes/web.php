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

Route::get('/homepage', function () {
    return view('dashboard-(Syndic-View)');
})->name('homepage');

Route::get('/assemble-gle', function () {
    return view('assemble-gle');
})->name('assemble-gle');


Route::get('assemble-gle/{id}', function () {
    return view('assemble-gle-detail');
})->name('assemble-gle-detail');