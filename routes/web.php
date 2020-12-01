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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('index', 'IndexController@index')->name('admin.index');

    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::resource('roles', 'roleController');

    require_once('components/Emailsetting.php');

    // Routing for Department
    Route::get("department/view_all", "DepartmentController@index")->name("view_department");
    Route::get("department/add", "DepartmentController@create")->name("add_department");
    Route::post("department/store", "DepartmentController@store")->name("store_department");
    Route::get("department/edit/{id}", "DepartmentController@edit")->name("edit_department");
    Route::post("department/update/{id}", "DepartmentController@update")->name("update_department");
    Route::get('department/delete/{id}', 'DepartmentController@destroy')->name('delete_department');
    // Routing for Service
    Route::get("services/view_all", "ServiceController@index")->name("view_service");
    Route::get("services/add", "ServiceController@create")->name("add_service");
    Route::post("services/store", "ServiceController@store")->name("store_service");
    Route::get("services/edit/{id}", "ServiceController@edit")->name("edit_service");
    Route::post("services/update/{id}", "ServiceController@update")->name("update_service");
    Route::get('services/delete/{id}', 'ServiceController@destroy')->name('delete_service');
});
