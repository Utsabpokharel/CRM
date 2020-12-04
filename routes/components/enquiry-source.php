<?php

Route::get('enquiry/source/index','EnquirySourceController@index')->name('EnquirySource.index');
Route::get('enquiry/source/create','EnquirySourceController@create')->name('EnquirySource.create');
Route::post('enquiry/source/store','EnquirySourceController@store')->name('EnquirySource.store');
Route::get('enquiry/source/delete/{id}','EnquirySourceController@destroy')->name('EnquirySource.destroy');
Route::get('enquiry/source/edit/{id}','EnquirySourceController@edit')->name('EnquirySource.edit');
Route::post('enquiry/source/update/{id}','EnquirySourceController@update')->name('EnquirySource.update');
Route::get('enquiry/source/ViewTrash', 'EnquirySourceController@ViewTrash')->name('EnquirySource.ViewTrash');
Route::get('enquiry/source/restore/{id}', 'EnquirySourceController@restore')->name('EnquirySource.restore');
Route::get('enquiry/source/deleteTrash/{id}', 'EnquirySourceController@deleteTrash')->name('EnquirySource.deleteTrash');