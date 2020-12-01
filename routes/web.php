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


Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){

    Route::get('index','IndexController@index')->name('admin.index');
    Route::resource('roles', 'roleController');

//Income and income category
    Route::get('Incomecategory/Create','incomecategorycontroller@create')->name('incomecategory.create');
	Route::get('Incomecategory','incomecategorycontroller@view')->name('incomecategory.view');
	Route::post('Incomecategory/Store','incomecategorycontroller@store')->name('incomecategory.store');
	Route::get('Incomecategory/Edit/{incomecategoryid}','incomecategorycontroller@edit')->name('incomecategory.edit');
	Route::post('Incomecategory/Update/{incomecategoryid}','incomecategorycontroller@update')->name('incomecategory.update');
	Route::get('Incomecategory/Delete/{incomecategoryid}','incomecategorycontroller@destroy')->name('incomecategory.destroy');
	//Income



//Expenses and expenses category
	Route::get('Expensescategory','Expensescategorycontroller@view')->name('expensescategory.view');
    Route::get('Expensescategory/Create','Expensescategorycontroller@create')->name('expensescategory.create');
    Route::post('Expensescategory/Store','Expensescategorycontroller@store')->name('expensescategory.store');
    Route::get('Expensescategory/Edit/{expensescategoryid}','Expensescategorycontroller@edit')->name('expensescategory.edit');
    Route::post('Expensescategory/Update/{expensescategoryid}','Expensescategorycontroller@update')->name('expensescategory.update');
    Route::get('Expensescategory/Delete/{expensescategoryid}','Expensescategorycontroller@destroy')->name('expensescategory.destroy');
//Expenses
    Route::get('Expenses/Create','Expensescontroller@create')->name('expenses.create');
    Route::get('Expenses','Expensescontroller@view')->name('expenses.view');
    Route::post('Expenses/Store','Expensescontroller@store')->name('expenses.store');
     Route::get('Expenses/Edit/{expensesid}','Expensescontroller@edit')->name('expenses.edit');
     Route::post('Expenses/Update/{expensesid}','Expensescontroller@update')->name('expenses.update');
    Route::get('Expenses/deleteTrashed/{id}','Expensescontroller@deletetrashed')->name('expenses.trashed');
    Route::get('Expenses/Viewtrashed','Expensescontroller@Viewtrashed')->name('expenses.Viewtrashed');
    Route::get('expenses/restore/{id}','Expensescontroller@restore')->name('expenses.restore');
    Route::get('Expenses/Delete{expensesid}','Expensescontroller@destroy')->name('expenses.destroy');





    

});
  


	









