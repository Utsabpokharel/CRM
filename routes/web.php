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
    Route::get('customer','Customercontroller@view')->name('customer.view');
    Route::get('customer/create','Customercontroller@create')->name('customer.create');
    
    // Route for staff
    Route::get('staff','StaffController@index')->name('staff.view');
    Route::get('staffadd','StaffController@create')->name('staff.add');
    Route::post('staffstore','StaffController@store')->name('staff.store');
    Route::get('staffedit/{staffid}','StaffController@edit')->name('staff.edit');
    Route::post('staffupdate/{staffid}','StaffController@update')->name('staff.update');
    Route::get('staffdestroy/{staffid}','StaffController@destroy')->name('staff.destroy');
    Route::get('stafftrashed','StaffController@trashedView')->name('staff.trashed');
    Route::get('staffrestore/{id}','StaffController@restore')->name('staff.restore');

    Route::get('staffdeleteTrash/{id}','StaffController@deleteTrash')->name('staff.deleteTrash');
    require_once('components/Emailsetting.php');

    // Route for award
    Route::get('award','AwardController@index')->name('award.view');
    Route::get('awardadd','AwardController@create')->name('award.add');
    Route::post('awardstore','AwardController@store')->name('award.store');
    Route::get('awardedit/{awardid}','AwardController@edit')->name('award.edit');
    Route::post('awardupdate/{awardid}','AwardController@update')->name('award.update');
    Route::get('awarddestroy/{awardid}','AwardController@destroy')->name('award.destroy');

});

