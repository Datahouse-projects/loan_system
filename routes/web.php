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

/* START Admin */
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/loan_types', 'AdminController@loan_types')->name('admin.loans');

Route::get('/admin/officers/add', 'AdminController@createOfficer')->name('admin.officer.add');
Route::post('/admin/officers/add', 'AdminController@addOfficer')->name('admin.officer.add.submit');
Route::get('/admin/remove/{officer_id?}', 'AdminController@removeOfficer')->name('admin.officer.remove');

Route::get('/admin/createLoan_types', 'AdminController@createLoan_types')->name('admin.addLoans');
Route::post('/admin/addLoan_types', 'AdminController@addLoan_types')->name('admin.loan_types.add.submit');
Route::get('/admin/remove/{loan_types_id?}', 'AdminController@removeLoan_types')->name('admin.loan_types.remove');


/* End Admin */


/* START Officer */
Route::get('/officer', 'OfficerController@index')->name('officer');
Route::get('/officer/login', 'Auth\OfficerLoginController@showLoginForm')->name('officer.login');
Route::post('/officer/login', 'Auth\OfficerLoginController@login')->name('officer.login.submit');

Route::get('/pending', 'OfficerController@showPendingLoans')->name('officer.pending');
Route::get('/approved', 'OfficerController@showApprovedLoans')->name('officer.approved');
Route::get('/overdue', 'OfficerController@showOverdueLoans')->name('officer.overdue');

Route::get('/officer/loan/{loan_id?}', 'OfficerController@showLoanDetails')->name('officer.loan.details');
Route::get('/officer/verify/{loan_id?}', 'OfficerController@verifyLoan')->name('officer.loan.verify');

Route::get('/officer/invalidate/{loan_id?}', 'OfficerController@invalidateLoan')->name('officer.loan.invalidate');
Route::get('/officer/deny/{loan_id?}', 'OfficerController@denyLoan')->name('officer.loan.deny');

Route::post('/officer/loan/grant', 'OfficerController@showOverdueLoans')->name('officer.loan.grant');



/* END Officer */

/* START Customer */
Route::get('/customer', 'CustomerController@index')->name('customer');
Route::get('/customer/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
Route::post('/customer/login', 'Auth\CustomerLoginController@login')->name('customer.login.submit');

Route::get('/customer/register', 'Auth\CustomerLoginController@showRegistrationForm')->name('customer.register');
Route::post('/customer/register', 'Auth\CustomerLoginController@register')->name('customer.register.submit');

Route::get('/status', 'CustomerController@index')->name('customer.status');

Route::get('/finance', 'CustomerController@showFinancialInfo')->name('customer.finance');
Route::post('/finance', 'CustomerController@updateFinancialInfo')->name('customer.finance.update');

Route::get('/apply', 'CustomerController@showApplicationForm')->name('customer.apply');
Route::post('/apply', 'CustomerController@submitApplicationForm')->name('customer.application.submit');

Route::get('/repay', 'CustomerController@showRepayForm')->name('customer.repay');
Route::post('/repay', 'CustomerController@repayLoan')->name('customer.repayment.submit');
/* END Customer */


