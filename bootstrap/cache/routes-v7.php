<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OSIthjHmJOaKEQIc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.check',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/Profile-Setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/ChangePassword' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changePassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/services/view_all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view_services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/services/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/services/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_service',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/staff/trashed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.trashed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Income/Viewtrashed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.Viewtrashed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expenses/Viewtrashed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.Viewtrashed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bank/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/staff' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/staff/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/staff/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.setting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.setting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/award' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/award/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/award/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/adduser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/storeuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/level' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'level.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/level/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'title.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'title.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/title/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'title.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/generalSettings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/general/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Incomecategory/Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incomecategory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Incomecategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incomecategory.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Incomecategory/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incomecategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Income' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Income/Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Income/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expensescategory' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expensescategory.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expensescategory/Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expensescategory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expensescategory/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expensescategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expenses/Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Expenses/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/category/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/category/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/source/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/source/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/source/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/source/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/response/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/response/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enquiry/response/ViewTrash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.ViewTrash',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/department/view_all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view_department',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/department/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_department',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/department/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store_department',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.view',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/Email-Settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bank' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bank/Create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bank/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/markasread' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notificationmarkasread',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/a(?|dmin/(?|p(?|rofile/([^/]++)(?|(*:42)|/edit(*:54)|(*:61))|ersonalInfo/([^/]++)(?|(*:92)))|services/(?|edit/([^/]++)(*:126)|update/([^/]++)(*:149)))|ward/(?|destroy/([^/]++)(*:183)|edit/([^/]++)(*:204)|update/([^/]++)(*:227)))|/roles/([^/]++)(?|(*:255)|/edit(*:268)|(*:276))|/s(?|ervices/delete/([^/]++)(*:313)|taff/(?|restore/([^/]++)(*:345)|de(?|leteTrash/([^/]++)(*:376)|stroy/([^/]++)(*:398))|edit/([^/]++)(*:420)|update/([^/]++)(*:443)))|/user(?|s/delete/([^/]++)(*:478)|/(?|edit/([^/]++)(*:503)|update/([^/]++)(*:526)))|/level/(?|delete/([^/]++)(*:561)|([^/]++)(?|(*:580)|/edit(*:593)|(*:601)))|/title/(?|delete/([^/]++)(*:636)|([^/]++)(?|(*:655)|/edit(*:668)|(*:676)))|/Income(?|category/(?|Delete/([^/]++)(*:723)|Edit/([^/]++)(*:744)|Update/([^/]++)(*:767))|/(?|deleteTrashed/([^/]++)(*:802)|restore/([^/]++)(*:826)|Edit([^/]++)(*:846)|Update([^/]++)(*:868)|Delete([^/]++)(*:890)))|/Expenses(?|category/(?|Delete/([^/]++)(*:939)|Edit/([^/]++)(*:960)|Update/([^/]++)(*:983))|/(?|deleteTrashed/([^/]++)(*:1018)|Edit/([^/]++)(*:1040)|Update/([^/]++)(*:1064)|Delete([^/]++)(*:1087)))|/e(?|xpenses/restore/([^/]++)(*:1127)|nquiry/(?|delete(?|/([^/]++)(*:1164)|Trash/([^/]++)(*:1187))|edit/([^/]++)(*:1210)|update/([^/]++)(*:1234)|res(?|tore/([^/]++)(*:1262)|ponse/(?|create/([^/]++)(*:1295)|delete(?|/([^/]++)(*:1322)|Trash/([^/]++)(*:1345))|restore/([^/]++)(*:1371)))|category/(?|delete(?|/([^/]++)(*:1412)|Trash/([^/]++)(*:1435))|edit/([^/]++)(*:1458)|update/([^/]++)(*:1482)|restore/([^/]++)(*:1507))|source/(?|delete(?|/([^/]++)(*:1545)|Trash/([^/]++)(*:1568))|edit/([^/]++)(*:1591)|update/([^/]++)(*:1615)|restore/([^/]++)(*:1640))))|/customer/(?|restore/([^/]++)(*:1681)|de(?|leteTrash/([^/]++)(*:1713)|stroy/([^/]++)(*:1736))|edit/([^/]++)(*:1759)|Update/([^/]++)(*:1783))|/department/(?|delete/([^/]++)(*:1823)|edit/([^/]++)(*:1845)|update/([^/]++)(*:1869))|/vendors/(?|restore/([^/]++)(*:1907)|delete(?|Trash/([^/]++)(*:1939)|/([^/]++)(*:1957))|edit/([^/]++)(*:1980)|update/([^/]++)(*:2004))|/bank/(?|restore/([^/]++)(*:2039)|de(?|leteTrash/([^/]++)(*:2071)|stroy/([^/]++)(*:2094))|edit/([^/]++)(*:2117)|Update/([^/]++)(*:2141))|/general/(?|edit/([^/]++)(*:2176)|update/([^/]++)(*:2200)))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.show',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      54 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.edit',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      61 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.update',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profile.destroy',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      92 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'personal',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'personal_update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_service',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_service',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.destroy',
          ),
          1 => 
          array (
            0 => 'awardid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.edit',
          ),
          1 => 
          array (
            0 => 'awardid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'award.update',
          ),
          1 => 
          array (
            0 => 'awardid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      255 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'roles.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_service',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.destroy',
          ),
          1 => 
          array (
            0 => 'staffid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.edit',
          ),
          1 => 
          array (
            0 => 'staffid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'staff.update',
          ),
          1 => 
          array (
            0 => 'staffid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.destroy',
          ),
          1 => 
          array (
            0 => 'userid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.edit',
          ),
          1 => 
          array (
            0 => 'userid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update',
          ),
          1 => 
          array (
            0 => 'userid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level.show',
          ),
          1 => 
          array (
            0 => 'level',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level.edit',
          ),
          1 => 
          array (
            0 => 'level',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'level.update',
          ),
          1 => 
          array (
            0 => 'level',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'title.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'title.show',
          ),
          1 => 
          array (
            0 => 'title',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'title.edit',
          ),
          1 => 
          array (
            0 => 'title',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'title.update',
          ),
          1 => 
          array (
            0 => 'title',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incomecategory.destroy',
          ),
          1 => 
          array (
            0 => 'incomecategoryid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incomecategory.edit',
          ),
          1 => 
          array (
            0 => 'incomecategoryid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'incomecategory.update',
          ),
          1 => 
          array (
            0 => 'incomecategoryid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.trashed',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.edit',
          ),
          1 => 
          array (
            0 => 'incomeid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.update',
          ),
          1 => 
          array (
            0 => 'incomeid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'income.destroy',
          ),
          1 => 
          array (
            0 => 'incomeid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expensescategory.destroy',
          ),
          1 => 
          array (
            0 => 'expensescategoryid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      960 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expensescategory.edit',
          ),
          1 => 
          array (
            0 => 'expensescategoryid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      983 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expensescategory.update',
          ),
          1 => 
          array (
            0 => 'expensescategoryid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.trashed',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1040 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.edit',
          ),
          1 => 
          array (
            0 => 'expensesid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.update',
          ),
          1 => 
          array (
            0 => 'expensesid',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expensesid',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'Enquiry.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.create',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1322 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryResponse.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1458 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1482 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1507 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquiryCategory.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1591 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'EnquirySource.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1759 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_department',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_department',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_department',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.restore',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2071 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.deleteTrash',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bank.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::OSIthjHmJOaKEQIc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":291:{@IAm4v3U9U1Y9ILl2xW1ND9QkGQVtzTms6qN4fkggGuk=.a:5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000027766f0b00000000135f0ab0";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::OSIthjHmJOaKEQIc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@form',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@form',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'login.check' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/',
        'where' => 
        array (
        ),
        'as' => 'login.check',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IndexController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\IndexController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile/{profile}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'as' => 'profile.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\profileDemoController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\profileDemoController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'personal' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/personalInfo/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PersonalInfoController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PersonalInfoController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'personal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'personal_update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/personalInfo/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PersonalInfoController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PersonalInfoController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'personal_update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/Profile-Setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfilesettingController@settingform',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfilesettingController@settingform',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'changePassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/ChangePassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfilesettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfilesettingController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'changePassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'view_services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/services/view_all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'view_services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add_service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/services/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'add_service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store_service' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/services/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'store_service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit_service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/services/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'edit_service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_service' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/services/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'update_service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'roles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'roles/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'as' => 'roles.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\roleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\roleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ServiceController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.trashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/trashed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@trashedView',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@trashedView',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.trashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'award.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'award/destroy/{awardid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AwardController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AwardController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'award.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/delete/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\userController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\userController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'level/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'level.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'title/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'title.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'incomecategory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Incomecategory/Delete/{incomecategoryid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'incomecategory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.trashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income/deleteTrashed/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@deletetrashed',
        'controller' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@deletetrashed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.trashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.Viewtrashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income/Viewtrashed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@Viewtrashed',
        'controller' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@Viewtrashed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.Viewtrashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expensescategory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expensescategory/Delete/{expensescategoryid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expensescategory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.trashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expenses/deleteTrashed/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@deletetrashed',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@deletetrashed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.trashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.Viewtrashed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expenses/Viewtrashed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@Viewtrashed',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@Viewtrashed',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.Viewtrashed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'delete_department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'department/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepartmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepartmentController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'delete_department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'super',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'staff/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/edit/{staffid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'staff/update/{staffid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'staff.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'staff/destroy/{staffid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StaffController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StaffController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'staff.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'email.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailsettingController@settingform',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailsettingController@settingform',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email.setting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'profile.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProfilesettingController@settingform',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProfilesettingController@settingform',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'profile.setting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'award.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'award',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AwardController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AwardController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'award.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'award.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'award/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AwardController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AwardController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'award.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'award.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'award/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AwardController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AwardController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'award.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'award.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'award/edit/{awardid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AwardController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AwardController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'award.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'award.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'award/update/{awardid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AwardController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AwardController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'award.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\userController@users',
        'controller' => 'App\\Http\\Controllers\\Admin\\userController@users',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'adduser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\userController@addUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\userController@addUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'storeuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\userController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\userController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/edit/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\userController@editUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\userController@editUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'user.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/update/{userid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\userController@updateUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\userController@updateUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'level.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'level/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'level.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'level',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'level.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'level/{level}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'level.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'level/{level}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'level.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'level.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'level/{level}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'level.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\levelController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\levelController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'title.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'title/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'title.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'title.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'title/{title}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'title.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@show',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'title/{title}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'title.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'title.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'title/{title}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'as' => 'title.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\titleController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\titleController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'general.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'generalSettings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'general.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'general.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'general.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'general.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'general.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'general.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'general/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\GeneralController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\GeneralController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'general.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'incomecategory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Incomecategory/Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'incomecategory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'incomecategory.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Incomecategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@view',
        'controller' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'incomecategory.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'incomecategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Incomecategory/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'incomecategory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'incomecategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Incomecategory/Edit/{incomecategoryid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'incomecategory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'incomecategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Incomecategory/Update/{incomecategoryid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\incomecategorycontroller@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'incomecategory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IncomeController@view',
        'controller' => 'App\\Http\\Controllers\\Admin\\IncomeController@view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income/Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IncomeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\IncomeController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Income/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IncomeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\IncomeController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income/Edit{incomeid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IncomeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\IncomeController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Income/Update{incomeid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\IncomeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\IncomeController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'income.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Income/Delete{incomeid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Incomecontroller@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'income.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expensescategory.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expensescategory',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@view',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expensescategory.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expensescategory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expensescategory/Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expensescategory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expensescategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Expensescategory/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expensescategory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expensescategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expensescategory/Edit/{expensescategoryid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expensescategory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expensescategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Expensescategory/Update/{expensescategoryid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescategorycontroller@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expensescategory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expenses/Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@view',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@view',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Expenses/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expenses/Edit/{expensesid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'Expenses/Update/{expensesid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Expenses/Delete{expensesid}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Expensescontroller@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'expenses.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'customer/Update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'customer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomerController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'customer.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'Enquiry.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'Enquiry.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryCategory.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/category/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryCategoryController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryCategory.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/source/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/source/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquirySource.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/source/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquirySourceController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquirySource.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/response/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/response/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enquiry/response/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/response/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.ViewTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/response/ViewTrash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@ViewTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@ViewTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.ViewTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.restore' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/response/restore/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@restore',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@restore',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.restore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'EnquiryResponse.deleteTrash' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enquiry/response/deleteTrash/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@deleteTrash',
        'controller' => 'App\\Http\\Controllers\\Admin\\EnquiryResponseController@deleteTrash',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'EnquiryResponse.deleteTrash',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'view_department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'department/view_all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepartmentController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'view_department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'add_department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'department/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepartmentController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepartmentController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'add_department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'store_department' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'department/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepartmentController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'store_department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'edit_department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'department/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepartmentController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepartmentController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'edit_department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'update_department' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'department/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DepartmentController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'update_department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.view',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@addVendor',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@addVendor',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendors/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@editVendor',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@editVendor',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vendors/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'vendors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\VendorController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'vendors.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'Email-Settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EmailsettingController@settingform',
        'controller' => 'App\\Http\\Controllers\\Admin\\EmailsettingController@settingform',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank/Create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@create',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bank/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@store',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@edit',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'bank/Update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@update',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'bank.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bank/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'staff',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BankController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BankController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'bank.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@notification',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@notification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'notification',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'notificationmarkasread' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'markasread',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":375:{@YmFZ2xC3juFgLhVCj6OQSL0yE+5MTf/TCfLWAIopNLo=.a:5:{s:3:"use";a:0:{}s:8:"function";s:162:"function () {
    \\auth()->user()->unreadNotifications->where(\'type\', \'App\\Notifications\\UserAdd\')->markAsRead();
    return \\redirect()->route(\'user.view\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000277664cb00000000135f0ab0";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'notificationmarkasread',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
