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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::get('index', 'IndexController@index')->name('admin.index');
    Route::resource('roles', 'roleController');
//Income and income category
    Route::get('Incomecategory/Create', 'incomecategorycontroller@create')->name('incomecategory.create');
    Route::get('Incomecategory', 'incomecategorycontroller@view')->name('incomecategory.view');
    Route::post('Incomecategory/Store', 'incomecategorycontroller@store')->name('incomecategory.store');
    Route::get('Incomecategory/Edit/{incomecategoryid}', 'incomecategorycontroller@edit')->name('incomecategory.edit');
    Route::post('Incomecategory/Update/{incomecategoryid}', 'incomecategorycontroller@update')->name('incomecategory.update');
    Route::get('Incomecategory/Delete/{incomecategoryid}', 'incomecategorycontroller@destroy')->name('incomecategory.destroy');
    //Income
//Expenses and expenses category
    Route::get('Expensescategory', 'Expensescategorycontroller@view')->name('expensescategory.view');
    Route::get('Expensescategory/Create', 'Expensescategorycontroller@create')->name('expensescategory.create');
    Route::post('Expensescategory/Store', 'Expensescategorycontroller@store')->name('expensescategory.store');
    Route::get('Expensescategory/Edit/{expensescategoryid}', 'Expensescategorycontroller@edit')->name('expensescategory.edit');
    Route::post('Expensescategory/Update/{expensescategoryid}', 'Expensescategorycontroller@update')->name('expensescategory.update');
    Route::get('Expensescategory/Delete/{expensescategoryid}', 'Expensescategorycontroller@destroy')->name('expensescategory.destroy');
//Expenses
    Route::get('Expenses/Create', 'Expensescontroller@create')->name('expenses.create');
    Route::get('Expenses', 'Expensescontroller@view')->name('expenses.view');
    Route::post('Expenses/Store', 'Expensescontroller@store')->name('expenses.store');
    Route::get('Expenses/Edit/{expensesid}', 'Expensescontroller@edit')->name('expenses.edit');
    Route::post('Expenses/Update/{expensesid}', 'Expensescontroller@update')->name('expenses.update');
    Route::get('Expenses/deleteTrashed/{id}', 'Expensescontroller@deletetrashed')->name('expenses.trashed');
    Route::get('Expenses/Viewtrashed', 'Expensescontroller@Viewtrashed')->name('expenses.Viewtrashed');
    Route::get('expenses/restore/{id}', 'Expensescontroller@restore')->name('expenses.restore');
    Route::get('Expenses/Delete{expensesid}', 'Expensescontroller@destroy')->name('expenses.destroy');
 //Designation-Title-Level-ProfileDemo
    Route::resource('designation', 'designationController');
    Route::resource('level', 'levelController');
    Route::resource('title', 'titleController');
    Route::resource('profile', 'profileDemoController');
    Route::get('personalInfo','profileDemoController@personal')->name('personal');
//users route
    Route::get('/users', 'userController@users')->name('user.view');
    Route::get('/adduser', 'userController@addUser')->name('user.add');
    Route::post('storeuser', 'userController@store')->name('user.store');
    Route::get('users/delete/{userid}', 'userController@destroy')->name('user.destroy');
    Route::get('user/edit/{userid}', 'userController@editUser')->name('user.edit');
    Route::post('user/update/{userid}', 'userController@updateUser')->name('user.update');
//Customer
    Route::get('customer', 'CustomerController@index')->name('customer.index');
    Route::post('customer/Store', 'CustomerController@store')->name('customer.store');
    Route::get('customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::put('customer/Update/{id}', 'CustomerController@update')->name('customer.update');
    Route::get('customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
    Route::get('customer/Create', 'CustomerController@create')->name('customer.create');
    Route::get('customer/ViewTrash', 'CustomerController@ViewTrash')->name('customer.ViewTrash');
    Route::get('customer/restore/{id}', 'CustomerController@restore')->name('customer.restore');
    Route::get('customer/deleteTrash/{id}', 'CustomerController@deleteTrash')->name('customer.deleteTrash');


//staff route
    Route::get('staff', 'StaffController@index')->name('staff.view');
    Route::get('staffadd', 'StaffController@create')->name('staff.add');
    Route::post('staffstore', 'StaffController@store')->name('staff.store');
    Route::get('staffedit/{id}', 'StaffController@edit')->name('staff.edit');
    Route::get('staffupdate/{id}', 'StaffController@update')->name('staff.update');
    Route::get('staffdestroy/{id}', 'StaffController@destroy')->name('staff.destroy');
    require_once('components/Emailsetting.php');
    require_once('components/enquiry.php');
    require_once('components/enquiry-category.php');
    require_once('components/enquiry-source.php');
});

