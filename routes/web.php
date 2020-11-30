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
    require_once('components/enquiry-category.php');
    require_once('components/enquiry-source.php');
    Route::get('customer','Customercontroller@view')->name('customer.view');
    Route::get('customer/create','Customercontroller@create')->name('customer.create');
    Route::get('staff','StaffController@index')->name('staff.view');
    Route::get('staffadd','StaffController@create')->name('staff.add');
    Route::post('staffstore','StaffController@store')->name('staff.store');
    Route::get('staffedit/{id}','StaffController@edit')->name('staff.edit');
    Route::get('staffupdate/{id}','StaffController@update')->name('staff.update');
    Route::get('staffdestroy/{id}','StaffController@destroy')->name('staff.destroy');
    require_once('components/Emailsetting.php');
});
//users route
Route::get('/users','Admin\userController@users')->name('user.view');
Route::get('/adduser','Admin\userController@addUser')->name('user.add');

