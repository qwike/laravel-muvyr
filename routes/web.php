<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/houses', [App\Http\Controllers\HouseController::class, 'houses'])->name('houses');
Route::get('/houses/{id}', [App\Http\Controllers\HouseController::class, 'show'])->name('house');
Route::get('/entertainments', [App\Http\Controllers\EntertainmentController::class, 'entertainments'])->name('entertainments');
Route::get('/excursions', [App\Http\Controllers\ExcursionController::class, 'excursions'])->name('excursions');
Route::get('/events', [App\Http\Controllers\EventController::class, 'events'])->name('events');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'products'])->name('products');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'projects'])->name('projects');
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'history'])->name('history');
Route::get('/contacts', [App\Http\Controllers\ContactsController::class, 'contacts'])->name('contacts');
