<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    if (Auth::guard()->check() == true) return view('home');
    if (Auth::guard()->check() == false) return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('klantens', 'klantenController');


Route::resource('leveranciers', 'leveranciersController');


Route::resource('users', 'UsersController')->middleware('can:role,"admin"');

Route::get('/restore-leveranciers', 'leveranciersController@restoreIndex')->name('leveranciers.restoreIndex');
Route::get('/restore-leveranciers/{id}/restoreShow', 'leveranciersController@restoreShow')->name('leveranciers.restoreShow');
Route::post('/restore-leveranciers/{id}/restoreBack', 'leveranciersController@restoreBack')->name('leveranciers.restoreBack');

Route::get('/restore-klanten', 'klantenController@restoreIndex')->name('klanten.restoreIndex');
Route::get('/restore-klanten/{id}/restoreShow', 'klantenController@restoreShow')->name('klanten.restoreShow');
Route::post('/restore-klanten/{id}/restoreBack', 'klantenController@restoreBack')->name('klanten.restoreBack');
