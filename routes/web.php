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

Route::get('/kontak', 'Kontak@index')->name('kontakIndex'); // show kontak list
Route::get('/kontak/new', 'Kontak@new_form')->name('kontakNewForm'); // show create new kontak form
Route::post('/kontak', 'Kontak@save')->name('kontakCreate'); // process create new kontak
Route::get('/kontak/delete/{id}', 'Kontak@delete')->name('kontakDelete'); // deletes kontak
Route::get('/kontak/edit/{id}', 'Kontak@edit')->name('kontakEditForm'); // show komentar edit form
Route::post('/kontak/edit/{id}', 'Kontak@update')->name('kontakUpdate'); // update komentar 
Route::get('/kontak/{id}', 'Kontak@detail')->name('kontakDetail'); // show detail kontak
Route::get('/kontak?nama=', 'Kontak@filter')->name('kontakFilter'); 