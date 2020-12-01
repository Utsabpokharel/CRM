<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VendorController;

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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::resource('roles', 'roleController');
    Route::resource('vendors', 'VendorController');
    Route::get('admin/vendors/create', 'VendorController@create')->name('vendor.create');
    Route::get('admin/vendors', 'VendorController@index')->name('vendor.index');
    Route::get('admin/vendors/{vendor}/edit', 'VendorController@edit')->name('vendor.edit');
    Route::get('admin/vendors/{vendor}', 'VendorController@destroy')->name('vendor.destroy');
});