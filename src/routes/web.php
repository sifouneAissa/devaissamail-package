<?php

use Illuminate\Http\Request;
// Route::get('mail',function (){
//     return view('mail::mail');
// });
Route::group(['namespace' => 'Devaissamail\Mail\Http\Controllers'], function () {
    
Route::get('mail','MailController@index');

Route::post('mail','MailController@store');


});