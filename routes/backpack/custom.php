<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('company', 'CompanyCrudController');
    Route::crud('client', 'ClientCrudController');
    Route::crud('deposit', 'DepositCrudController');
    Route::crud('servicetype', 'ServiceTypeCrudController');
    Route::crud('service', 'ServiceCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('orderdetail', 'OrderDetailCrudController');
    Route::crud('transaction', 'TransactionCrudController');
}); // this should be the absolute last line of this file