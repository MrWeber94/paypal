<?php

use Illuminate\Support\Facades\Route;

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



Route::get('handle-payment', 'PayPalPaymentController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PayPalPaymentController@paymentSuccess')->name('success.payment');