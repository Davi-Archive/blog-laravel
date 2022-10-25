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

Route::view('/', view: 'index')->name(name: 'home');

Route::view('/contact', view: 'contact')->name(name: 'contact');

Route::view('/about', view: 'about')->name(name: 'about');