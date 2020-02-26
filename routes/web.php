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


Rout::get('/', 'PagesController@home');
Rout::get('/about', 'PagesController@about');
Rout::get('/contact', 'PagesController@contact');

