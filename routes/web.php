<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
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

    Route::get('index','IndexController@index')->name('admin.index');
    Route::resource('roles', 'roleController');



    //Customer
    Route::get('customer','Customercontroller@index')->name('customer.index');
 Route::post('customer/Store','Customercontroller@store')->name('customer.store');
  Route::get('customer/edit/{id}','Customercontroller@edit')->name('customer.edit');
  Route::put('customer/Update/{id}','Customercontroller@update')->name('customer.update');
 Route::get('customer/destroy/{id}','Customercontroller@destroy')->name('customer.destroy');
Route::get('customer/Create','Customercontroller@create')->name('customer.create');
require_once('components/Emailsetting.php');

});



