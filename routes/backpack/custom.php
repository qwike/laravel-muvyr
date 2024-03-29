<?php

use Illuminate\Support\Facades\Route;

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
    Route::crud('address', 'AddressCrudController');
    Route::crud('entertainment', 'EntertainmentCrudController');
    Route::crud('event', 'EventCrudController');
    Route::crud('excursion', 'ExcursionCrudController');
    Route::crud('house', 'HouseCrudController');
    Route::crud('product', 'ProductCrudController');
    Route::crud('project', 'ProjectCrudController');
    Route::crud('order', 'OrderCrudController');
    Route::crud('cafe-event', 'CafeEventCrudController');
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('telegram', 'TelegramCrudController');
}); // this should be the absolute last line of this file
