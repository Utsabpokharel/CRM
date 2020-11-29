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
    Route::resource('roles', 'roleController');


    //Customer
    Route::get('customer','Customercontroller@view')->name('customer.view');
Route::get('customer/create','Customercontroller@create')->name('customer.create');

});


