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

Route::get('/','EmailController@welcomeemail');
Route::get('sms','SmsController@send');
//
//Route::get('email/forgotpassword','EmailController@forgotpassword');
//Route::get('email/confirmpassword','EmailController@confirmpassword');
//Route::get('email/requestcompletion','EmailController@requestcompletion');
//Route::get('email/clientrequest','EmailController@clientRequest');
