<?php

Route::get('enquiry/response/index','EnquiryResponseController@index')->name('EnquiryResponse.index');
Route::get('enquiry/response/create/{id}','EnquiryResponseController@create')->name('EnquiryResponse.create');
Route::post('enquiry/response/store','EnquiryResponseController@store')->name('EnquiryResponse.store');
Route::get('enquiry/response/delete/{id}','EnquiryResponseController@destroy')->name('EnquiryResponse.destroy');
//Route::get('enquiry/response/edit/{id}','EnquiryResponseController@edit')->name('EnquiryResponse.edit');
//Route::post('enquiry/response/update/{id}','EnquiryResponseController@update')->name('EnquiryResponse.update');
Route::get('enquiry/response/ViewTrash', 'EnquiryResponseController@ViewTrash')->name('EnquiryResponse.ViewTrash');
Route::get('enquiry/response/restore/{id}', 'EnquiryResponseController@restore')->name('EnquiryResponse.restore');
Route::get('enquiry/response/deleteTrash/{id}', 'EnquiryResponseController@deleteTrash')->name('EnquiryResponse.deleteTrash');