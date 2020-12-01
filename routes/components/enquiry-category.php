<?php

Route::get('enquiry/category/index','EnquiryCategoryController@index')->name('EnquiryCategory.index');
Route::get('enquiry/category/create','EnquiryCategoryController@create')->name('EnquiryCategory.create');
Route::post('enquiry/category/store','EnquiryCategoryController@store')->name('EnquiryCategory.store');
Route::get('enquiry/category/delete/{id}','EnquiryCategoryController@destroy')->name('EnquiryCategory.destroy');
Route::get('enquiry/category/edit/{id}','EnquiryCategoryController@edit')->name('EnquiryCategory.edit');
Route::post('enquiry/category/update/{id}','EnquiryCategoryController@update')->name('EnquiryCategory.update');