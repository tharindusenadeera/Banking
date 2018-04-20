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
    return view('pages.index');
});

Route::post('careers/upload-file','CareersController@uploadFile')->name('upload-file');
//Route::post('careers/store','CareersController@store');
Route::resource('careers','CareersController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('business', function () {
    return view('pages.business-loan');
});

Route::get('personal', function () {
    return view('pages.personal-loan');
});

Route::get('appoinment', function () {
    return view('pages.request-appoinment');
});