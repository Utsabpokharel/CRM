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

Route::group(['prefix' => '/', 'namespace' => 'Admin', 'middleware' => 'guest'], function () {
    Route::get('/', 'LoginController@form')->name('login');
    Route::post('/login/check', 'LoginController@login')->name('login.check');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'user']], function () {
    //dashboard
    Route::get(
        'index',
        'IndexController@index'
    )->name('admin.index');
    //Profile
    Route::resource('profile', 'profileDemoController');
    Route::get('personalInfo/{id}', 'PersonalInfoController@edit')->name('personal');
    Route::post('personalInfo/{id}', 'PersonalInfoController@update')->name('personal_update');
    //profile Setting
    Route::get('Profile-Setting', 'ProfilesettingController@settingform')->name('profile');
    Route::post('ChangePassword', 'ProfilesettingController@store')->name('changePassword');
    // Routing for Service
    Route::get("services/view_all", "ServiceController@index")->name("view_services");
    Route::get("services/add", "ServiceController@create")->name("add_service");
    Route::post("services/store", "ServiceController@store")->name("store_service");
    Route::get("services/edit/{id}", "ServiceController@edit")->name("edit_service");
    Route::post("services/update/{id}", "ServiceController@update")->name("update_service");
    /*logout*/
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::group(['namespace' => 'Admin', 'middleware' => ['super']], function () {
    //roles
    Route::resource('roles', 'roleController');
    //service delete
    Route::get('services/delete/{id}', 'ServiceController@destroy')->name('delete_service');
    //staff delete
    Route::get('staff/trashed', 'StaffController@trashedView')->name('staff.trashed');
    Route::get('staff/restore/{id}', 'StaffController@restore')->name('staff.restore');
    Route::get('staff/deleteTrash/{id}', 'StaffController@deleteTrash')->name('staff.deleteTrash');
    //award delete
    Route::get('award/destroy/{awardid}', 'AwardController@destroy')->name('award.destroy');
    //user delete
    Route::get('users/delete/{userid}', 'userController@destroy')->name('user.destroy');
    //level delete
    Route::get('level/delete/{id}', 'levelController@destroy')->name('level.destroy');
    //title delete
    Route::get('title/delete/{id}', 'titleController@destroy')->name('title.destroy');
    //Income Category delete
    Route::get('Incomecategory/Delete/{incomecategoryid}', 'incomecategorycontroller@destroy')->name('incomecategory.destroy');
    //Income delete
    Route::get('Income/deleteTrashed/{id}', 'Incomecontroller@deletetrashed')->name('income.trashed');
    Route::get('Income/Viewtrashed', 'Incomecontroller@Viewtrashed')->name('income.Viewtrashed');
    Route::get('Income/restore/{id}', 'Incomecontroller@restore')->name('income.restore');
    //Expense Category delete
    Route::get('Expensescategory/Delete/{expensescategoryid}', 'Expensescategorycontroller@destroy')->name('expensescategory.destroy');
    //Expenses delete
    Route::get('Expenses/deleteTrashed/{id}', 'Expensescontroller@deletetrashed')->name('expenses.trashed');
    Route::get('Expenses/Viewtrashed', 'Expensescontroller@Viewtrashed')->name('expenses.Viewtrashed');
    Route::get('expenses/restore/{id}', 'Expensescontroller@restore')->name('expenses.restore');
    //Customer delete
    Route::get('customer/ViewTrash', 'CustomerController@ViewTrash')->name('customer.ViewTrash');
    Route::get('customer/restore/{id}', 'CustomerController@restore')->name('customer.restore');
    Route::get('customer/deleteTrash/{id}', 'CustomerController@deleteTrash')->name('customer.deleteTrash');
    //department delete
    Route::get('department/delete/{id}', 'DepartmentController@destroy')->name('delete_department');
    //vendor delete
    Route::get("vendors/ViewTrash", "VendorController@ViewTrash")->name("vendors.ViewTrash");
    Route::get("vendors/restore/{id}", "VendorController@restore")->name("vendors.restore");
    Route::get('vendors/deleteTrash/{id}', "VendorController@deleteTrash")->name("vendors.deleteTrash");
    //customer delete
    Route::get('customer/ViewTrash', 'CustomerController@ViewTrash')->name('customer.ViewTrash');
    Route::get('customer/restore/{id}', 'CustomerController@restore')->name('customer.restore');
    Route::get('customer/deleteTrash/{id}', 'CustomerController@deleteTrash')->name('customer.deleteTrash');
    //Bank account delete
    Route::get('bank/ViewTrash', 'BankController@ViewTrash')->name('bank.ViewTrash');
    Route::get('bank/restore/{id}', 'BankController@restore')->name('bank.restore');
    Route::get('bank/deleteTrash/{id}', 'BankController@deleteTrash')->name('bank.deleteTrash');
    // Incoming Call Logs Deleted
    Route::get("incoming/ViewTrash", "IncomingController@ViewTrash")->name("incoming.ViewTrash");
    Route::get("incoming/restore/{id}", "IncomingController@restore")->name("incoming.restore");
    Route::get('incoming/deleteTrash/{id}', "IncomingContoller@deleteTrash")->name("incoming.deleteTrash");
    // Outgoing Call Logs Deleted
    Route::get("outgoing/ViewTrash", "OutgoingController@ViewTrash")->name("outgoing.ViewTrash");
    Route::get("outgoing/restore/{id}", "OutgoingController@restore")->name("outgoing.restore");
    Route::get('outgoing/deleteTrash/{id}', "OutgoingContoller@deleteTrash")->name("outgoing.deleteTrash");
    // Visited Call Logs Deleted
    Route::get("visited/ViewTrash", "VisitedController@ViewTrash")->name("visited.ViewTrash");
    Route::get("visited/restore/{id}", "VisitedController@restore")->name("visited.restore");
    Route::get('visited/deleteTrash/{id}', "VisitedContoller@deleteTrash")->name("visited.deleteTrash");
});

Route::group(['namespace' => 'Admin', 'middleware' => ['admin']], function () {
    // Route for staff
    Route::get('staff', 'StaffController@index')->name('staff.view');
    Route::get('staff/add', 'StaffController@create')->name('staff.add');
    Route::post('staff/store', 'StaffController@store')->name('staff.store');
    Route::get('staff/edit/{staffid}', 'StaffController@edit')->name('staff.edit');
    Route::post('staff/update/{staffid}', 'StaffController@update')->name('staff.update');
    Route::get('staff/destroy/{staffid}', 'StaffController@destroy')->name('staff.destroy');
    require_once('components/Emailsetting.php');
    require_once('components/Profilesetting.php');
    // Route for award
    Route::get('award', 'AwardController@index')->name('award.view');
    Route::get('award/add', 'AwardController@create')->name('award.add');
    Route::post('award/store', 'AwardController@store')->name('award.store');
    Route::get('award/edit/{awardid}', 'AwardController@edit')->name('award.edit');
    Route::post('award/update/{awardid}', 'AwardController@update')->name('award.update');
    //users route
    Route::get('/users', 'userController@users')->name('user.view');
    Route::get('/adduser', 'userController@addUser')->name('user.add');
    Route::post('storeuser', 'userController@store')->name('user.store');
    Route::get('user/edit/{userid}', 'userController@editUser')->name('user.edit');
    Route::post('user/update/{userid}', 'userController@updateUser')->name('user.update');
    //level
    Route::resource('level', 'levelController')->except('destroy');
    //title
    Route::resource('title', 'titleController')->except('destroy');
    // General setting
    Route::get('generalSettings', 'GeneralController@create')->name('general.create');
    Route::post('general/Store', 'GeneralController@store')->name('general.store');
    Route::get('general/edit/{id}', 'GeneralController@edit')->name('general.edit');
    Route::post('general/update/{id}', 'GeneralController@update')->name('general.update');
});

Route::group(['namespace' => 'Admin', 'middleware' => ['staff']], function () {
    //Income  category
    Route::get('Incomecategory/Create', 'incomecategorycontroller@create')->name('incomecategory.create');
    Route::get('Incomecategory', 'incomecategorycontroller@view')->name('incomecategory.view');
    Route::post('Incomecategory/Store', 'incomecategorycontroller@store')->name('incomecategory.store');
    Route::get('Incomecategory/Edit/{incomecategoryid}', 'incomecategorycontroller@edit')->name('incomecategory.edit');
    Route::post('Incomecategory/Update/{incomecategoryid}', 'incomecategorycontroller@update')->name('incomecategory.update');
    //Income
    Route::get('Income', 'IncomeController@view')->name('income.view');
    Route::get('Income/Create', 'IncomeController@create')->name('income.create');
    Route::get('Income', 'IncomeController@view')->name('income.view');
    Route::post('Income/Store', 'IncomeController@store')->name('income.store');
    Route::get('Income/Edit{incomeid}', 'IncomeController@edit')->name('income.edit');
    Route::post('Income/Update{incomeid}', 'IncomeController@update')->name('income.update');
    Route::get('Income/Delete{incomeid}', 'Incomecontroller@destroy')->name('income.destroy');
    //Expenses and expenses category
    Route::get('Expensescategory', 'Expensescategorycontroller@view')->name('expensescategory.view');
    Route::get('Expensescategory/Create', 'Expensescategorycontroller@create')->name('expensescategory.create');
    Route::post('Expensescategory/Store', 'Expensescategorycontroller@store')->name('expensescategory.store');
    Route::get('Expensescategory/Edit/{expensescategoryid}', 'Expensescategorycontroller@edit')->name('expensescategory.edit');
    Route::post('Expensescategory/Update/{expensescategoryid}', 'Expensescategorycontroller@update')->name('expensescategory.update');
    //Expenses
    Route::get('Expenses/Create', 'Expensescontroller@create')->name('expenses.create');
    Route::get('Expenses', 'Expensescontroller@view')->name('expenses.view');
    Route::post('Expenses/Store', 'Expensescontroller@store')->name('expenses.store');
    Route::get('Expenses/Edit/{expensesid}', 'Expensescontroller@edit')->name('expenses.edit');
    Route::post('Expenses/Update/{expensesid}', 'Expensescontroller@update')->name('expenses.update');
    Route::get('Expenses/Delete{expensesid}', 'Expensescontroller@destroy')->name('expenses.destroy');
    //Customer
    Route::get('customer', 'CustomerController@index')->name('customer.index');
    Route::post('customer/Store', 'CustomerController@store')->name('customer.store');
    Route::get('customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::put('customer/Update/{id}', 'CustomerController@update')->name('customer.update');
    Route::get('customer/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
    Route::get('customer/Create', 'CustomerController@create')->name('customer.create');

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

    // Routing for Vendor
    Route::get("vendors/index", "VendorController@index")->name("vendors.view");
    Route::get("vendors/add", "VendorController@addVendor")->name("vendors.add");
    Route::post("vendors/store", "VendorController@store")->name("vendors.store");
    Route::get("vendors/edit/{id}", "VendorController@editVendor")->name("vendors.edit");
    Route::post("vendors/update/{id}", "VendorController@update")->name("vendors.update");
    Route::get("vendors/delete/{id}", "VendorController@destroy")->name("vendors.destroy");
    //email
    Route::get('Email-Settings', 'EmailsettingController@settingform')->name('email');
    //BankAccount
    Route::get('bank', 'BankController@index')->name('bank.index');
    Route::get('bank/Create', 'BankController@create')->name('bank.create');
    Route::post('bank/Store', 'BankController@store')->name('bank.store');
    Route::get('bank/edit/{id}', 'BankController@edit')->name('bank.edit');
    Route::put('bank/Update/{id}', 'BankController@update')->name('bank.update');
    Route::get('bank/destroy/{id}', 'BankController@destroy')->name('bank.destroy');
    // Routing for Incoming
    Route::get("incoming/index", "IncomingController@index")->name("incoming.view");
    Route::get("incoming/add", "IncomingController@create")->name("incoming.add");
    Route::post("incoming/store", "IncomingController@store")->name("incoming.store");
    Route::get("incoming/edit/{id}", "IncomingController@edit")->name("incoming.edit");
    Route::post("incoming/update/{id}", "IncomingController@update")->name("incoming.update");
    Route::get("incoming/delete/{id}", "IncomingController@destroy")->name("incoming.destroy");
    Route::get("outgoing/index", "OutgoingController@index")->name("outgoing.view");
    Route::get("outgoing/add", "OutgoingController@create")->name("outgoing.add");
    Route::post("outgoing/store", "OutgoingController@store")->name("outgoing.store");
    Route::get("outgoing/edit/{id}", "OutgoingController@edit")->name("outgoing.edit");
    Route::post("outgoing/update/{id}", "OutgoingController@update")->name("outgoing.update");
    Route::get("outgoing/delete/{id}", "OutgoingController@destroy")->name("outgoing.destroy");
    Route::get("visited/index", "VisitedController@index")->name("visited.view");
    Route::get("visited/add", "VisitedController@create")->name("visited.add");
    Route::post("visited/store", "VisitedController@store")->name("visited.store");
    Route::get("visited/edit/{id}", "VisitedController@edit")->name("visited.edit");
    Route::post("visited/update/{id}", "VisitedController@update")->name("visited.update");
    Route::get("visited/delete/{id}", "VisitedController@destroy")->name("visited.destroy");
});
Route::get('/notification', 'Admin\NotificationController@notification')->middleware('auth')->name('notification');
Route::get('/markasread', function () {
    auth()->user()->unreadNotifications->where('type', 'App\Notifications\UserAdd')->markAsRead();
    return redirect()->route('user.view');
})->middleware('auth')->name('notificationmarkasread');