<?php

Route::get('enquiry/index','EnquiryController@index')->name('Enquiry.index');
Route::get('enquiry/create','EnquiryController@create')->name('Enquiry.create');
Route::post('enquiry/store','EnquiryController@store')->name('Enquiry.store');
Route::get('enquiry/delete/{id}','EnquiryController@destroy')->name('Enquiry.destroy');
Route::get('enquiry/edit/{id}','EnquiryController@edit')->name('Enquiry.edit');
Route::post('enquiry/update/{id}','EnquiryController@update')->name('Enquiry.update');
Route::get('enquiry/ViewTrash', 'EnquiryController@ViewTrash')->name('Enquiry.ViewTrash');
Route::get('enquiry/restore/{id}', 'EnquiryController@restore')->name('Enquiry.restore');
Route::get('enquiry/deleteTrash/{id}', 'EnquiryController@deleteTrash')->name('Enquiry.deleteTrash');