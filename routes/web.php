<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\GeneralController;



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

/*login route*/
Route::group(['prefix'=>'/', 'namespace' => 'Admin','middleware'=>'guest'],function (){
   route::get('/','LoginController@form')->name('login');
   route::post('/login/check','LoginController@login')->name('login.check');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware'=>['auth','user']], function () {
    //dashboard
    Route::get('index', 'IndexController@index')->name('admin.index');
    //Profile
     Route::resource('profile', 'profileDemoController');
     Route::get('personalInfo', 'profileDemoController@personal')->name('personal');
     //profile Setting
     Route::get('Profile-Setting','ProfilesettingController@settingform')->name('profile');
    // Routing for Service
    Route::get("services/view_all", "ServiceController@index")->name("view_services");
    Route::get("services/add", "ServiceController@create")->name("add_service");
    Route::post("services/store", "ServiceController@store")->name("store_service");
    Route::get("services/edit/{id}", "ServiceController@edit")->name("edit_service");
    Route::post("services/update/{id}", "ServiceController@update")->name("update_service");
    Route::get('services/delete/{id}', 'ServiceController@destroy')->name('delete_service');
    /*logout*/
    Route::get('/logout','LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'Admin','middleware' => ['super']], function () {
    //roles
    Route::resource('roles', 'roleController');
});

Route::group(['namespace' => 'Admin','middleware' => ['admin']], function () {
    // Route for staff
    Route::get('staff', 'StaffController@index')->name('staff.view');
    Route::get('staff/add', 'StaffController@create')->name('staff.add');
    Route::post('staff/store', 'StaffController@store')->name('staff.store');
    Route::get('staff/edit/{staffid}', 'StaffController@edit')->name('staff.edit');
    Route::post('staff/update/{staffid}', 'StaffController@update')->name('staff.update');
    Route::get('staff/destroy/{staffid}', 'StaffController@destroy')->name('staff.destroy');
    Route::get('staff/trashed', 'StaffController@trashedView')->name('staff.trashed');
    Route::get('staff/restore/{id}', 'StaffController@restore')->name('staff.restore');
    Route::get('staff/deleteTrash/{id}', 'StaffController@deleteTrash')->name('staff.deleteTrash');
    require_once('components/Emailsetting.php');
    require_once('components/Profilesetting.php');
    // Route for award
    Route::get('award', 'AwardController@index')->name('award.view');
    Route::get('award/add', 'AwardController@create')->name('award.add');
    Route::post('award/store', 'AwardController@store')->name('award.store');
    Route::get('award/edit/{awardid}', 'AwardController@edit')->name('award.edit');
    Route::post('award/update/{awardid}', 'AwardController@update')->name('award.update');
    Route::get('award/destroy/{awardid}', 'AwardController@destroy')->name('award.destroy');
    //users route
    Route::get('/users', 'userController@users')->name('user.view');
    Route::get('/adduser', 'userController@addUser')->name('user.add');
    Route::post('storeuser', 'userController@store')->name('user.store');
    Route::get('users/delete/{userid}', 'userController@destroy')->name('user.destroy');
    Route::get('user/edit/{userid}', 'userController@editUser')->name('user.edit');
    Route::post('user/update/{userid}', 'userController@updateUser')->name('user.update');
    //level
    Route::resource('level', 'levelController');
    Route::get('level/delete/{id}', 'levelController@destroy')->name('level.destroy');
    //title
    Route::resource('title', 'titleController');
    Route::get('title/delete/{id}', 'titleController@destroy')->name('title.destroy');
});

Route::group(['namespace' => 'Admin','middleware' => ['staff']], function () {
    //Income and income category
    Route::get('Incomecategory/Create', 'incomecategorycontroller@create')->name('incomecategory.create');
    Route::get('Incomecategory', 'incomecategorycontroller@view')->name('incomecategory.view');
    Route::post('Incomecategory/Store', 'incomecategorycontroller@store')->name('incomecategory.store');
    Route::get('Incomecategory/Edit/{incomecategoryid}', 'incomecategorycontroller@edit')->name('incomecategory.edit');
    Route::post('Incomecategory/Update/{incomecategoryid}', 'incomecategorycontroller@update')->name('incomecategory.update');
    Route::get('Incomecategory/Delete/{incomecategoryid}', 'incomecategorycontroller@destroy')->name('incomecategory.destroy');
    //Income

    
    Route::get('Income/Create','IncomeController@create')->name('income.create');
    Route::get('Income','IncomeController@view')->name('income.view');
    Route::post('Income/Store','IncomeController@store')->name('income.store');
    Route::get('Income/Edit{incomeid}','IncomeController@edit')->name('income.edit');
    Route::post('Income/Update{incomeid}','IncomeController@update')->name('income.update');
    Route::get('Income/deleteTrashed/{id}', 'Incomecontroller@deletetrashed')->name('income.trashed');
    Route::get('Income/Viewtrashed', 'Incomecontroller@Viewtrashed')->name('income.Viewtrashed');
    Route::get('Income/restore/{id}', 'Incomecontroller@restore')->name('income.restore');
    Route::get('Income/Delete{incomeid}', 'Incomecontroller@destroy')->name('income.destroy');


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
    /*enquiry*/
    require_once('components/enquiry.php');
    require_once('components/enquiry-category.php');
    require_once('components/enquiry-source.php');
    require_once('components/enquiry-response.php');
    // Routing for Department
    Route::get("department/view_all", "DepartmentController@index")->name("view_department");
    Route::get("department/add", "DepartmentController@create")->name("add_department");
    Route::post("department/store", "DepartmentController@store")->name("store_department");
    Route::get("department/edit/{id}", "DepartmentController@edit")->name("edit_department");
    Route::post("department/update/{id}", "DepartmentController@update")->name("update_department");
    Route::get('department/delete/{id}', 'DepartmentController@destroy')->name('delete_department');

    // Routing for Vendor
    Route::get("vendors/index", "VendorController@index")->name("vendors.view");
    Route::get("vendors/add", "VendorController@addVendor")->name("vendors.add");
    Route::post("vendors/store", "VendorController@store")->name("vendors.store");
    Route::get("vendors/edit/{id}", "VendorController@editVendor")->name("vendors.edit");
    Route::post("vendors/update/{id}", "VendorController@update")->name("vendors.update");
    Route::get("vendors/delete/{id}", "VendorController@destroy")->name("vendors.destroy");
    Route::get("vendors/ViewTrash", "VendorController@ViewTrash")->name("vendors.ViewTrash");
    Route::get("vendors/restore/{id}", "VendorController@restore")->name("vendors.restore");
    Route::get('vendors/deleteTrash/{id}', "VendorController@deleteTrash")->name("vendors.deleteTrash");
    //email
    Route::get('Email-Settings','EmailsettingController@settingform')->name('email');


//BankAccount
Route::get('bank', 'BankController@index')->name('bank.index');
Route::get('bank/Create','BankController@create')->name('bank.create');
Route::post('bank/Store', 'BankController@store')->name('bank.store');
Route::get('bank/edit/{id}', 'BankController@edit')->name('bank.edit');
Route::put('bank/Update/{id}', 'BankController@update')->name('bank.update');
Route::get('bank/destroy/{id}', 'BankController@destroy')->name('bank.destroy');

Route::get('bank/ViewTrash', 'BankController@ViewTrash')->name('bank.ViewTrash');
Route::get('bank/restore/{id}', 'BankController@restore')->name('bank.restore');
Route::get('bank/deleteTrash/{id}', 'BankController@deleteTrash')->name('bank.deleteTrash');

// General setting
Route::get('general/Create', 'GeneralController@create')->name('general.create');
Route::post('general/Store', 'GeneralController@store')->name('general.store');

});




