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

Route::get('/', function () {
    return view('greetings');
});


Route::get('/add', function () {
    return view('addProjekt');
});

Route::get('/show/{id}', function () {
    return view('show');
});

Route::resource('projekt', 'ProjektController');
Route::post('projekt/kapcsDestroy/{id}', 'ProjektController@kapcsDestroy');
