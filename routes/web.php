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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prof', 'userController@profile')->name('prof');
Route::post('premium', 'UserController@premium');
Route::post('profile', 'UserController@update_avatar');
Route::resource('annonces', 'AnnoncesController');
Route::resource('/annonce_trajet','AnnTrajetController')-> middleware('utilisateur');
Route::resource('/annonce_colis','AnnColisController')-> middleware('utilisateur');
Route::get('/file','filescontroller@upshowfile')->name('afile');
Route::post('/file','filescontroller@store')->name('storefile');
//Route::get('/profile', 'HomeController@index')
