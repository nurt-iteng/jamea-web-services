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



Route::get('/voucher/show-voucher', 'VoucherController@showVoucherInfo');
Route::post('/voucher/voucher-info', 'VoucherController@saveVoucherInfo');
Route::get('/voucher/manage-voucher', 'VoucherController@manageVoucherInfo');
Route::get('/voucher/unpublished-voucher/{id}', 'VoucherController@unpublishedVoucherInfo');
Route::get('/voucher/published-voucher/{id}', 'VoucherController@publishedVoucherInfo');
Route::get('/voucher/view-voucher/{id}', 'VoucherController@viewVoucherInfo');
Route::get('/voucher/edit-voucher/{id}', 'VoucherController@editVoucherInfo');
Route::post('/voucher/update-voucher-info', 'VoucherController@updateVoucherInfo');
Route::get('/voucher/delete-voucher/{id}', 'VoucherController@deleteVoucherInfo');
Route::get('/voucher/view-pdf/{id}', 'VoucherController@pdfVoucherInfo');