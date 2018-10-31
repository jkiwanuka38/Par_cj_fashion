<?php

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

Route::view('/', 'landing-page');
Route::view('/about_us', 'about');
Route::view('/gallery', 'gallery');
Route::view('/contact_us', 'contact');
