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

// Route::get('/', function () {
//     $tasks =[
//             'Go to the store',
//             'Go to the hospital',
//             'Go to the Market'
//     ];
//     return view('welcome', [
//         'tasks' => $tasks,
//         'foo' => 'foobar'
//         ]);
// });
Rout::get('/', 'PagesController');

Route::get('/about', function () {
return view('about');
});

Route::get('/contact', function () {
    return view('contact');
    });