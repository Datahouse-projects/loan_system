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


/* START Officer */
Route::get('/officer', 'OfficerController@index')->name('officer');


Route::get('/pending', 'OfficerController@showPendingLoans')->name('officer.pending');
Route::get('/approved', 'OfficerController@showApprovedLoans')->name('officer.approved');
Route::get('/overdue', 'OfficerController@showOverdueLoans')->name('officer.overdue');

Route::get('/officer/loan/{loan_id?}', 'OfficerController@showLoanDetails')->name('officer.loan.details');
Route::get('/officer/verify/{loan_id?}', 'OfficerController@verifyLoan')->name('officer.loan.verify');

Route::get('/officer/invalidate/{loan_id?}', 'OfficerController@invalidateLoan')->name('officer.loan.invalidate');
Route::get('/officer/deny/{loan_id?}', 'OfficerController@denyLoan')->name('officer.loan.deny');

Route::post('/officer/loan/grant', 'OfficerController@showOverdueLoans')->name('officer.loan.grant');



/* END Officer */

