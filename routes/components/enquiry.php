<?php

Route::get('enquiry/index','EnquiryController@index')->name('Enquiry.index');
Route::get('enquiry/create','EnquiryController@create')->name('Enquiry.create');
Route::post('enquiry/store','EnquiryController@store')->name('Enquiry.store');
Route::get('enquiry/delete/{id}','EnquiryController@destroy')->name('Enquiry.destroy');
Route::get('enquiry/edit/{id}','EnquiryController@edit')->name('Enquiry.edit');
Route::post('enquiry/update/{id}','EnquiryController@update')->name('Enquiry.update');