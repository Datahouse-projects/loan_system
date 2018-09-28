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


/* START Admin */
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/officers/add', 'AdminController@createOfficer')->name('admin.officer.add');
Route::post('/admin/officers/add', 'AdminController@addOfficer')->name('admin.officer.add.submit');

Route::get('/admin/remove/{officer_id?}', 'AdminController@removeOfficer')->name('admin.officer.remove');

/* End Admin */
