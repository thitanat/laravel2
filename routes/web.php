<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Rutes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');



Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Auth::routes(['verify' => true]);

Route::get('/dashboard', 'DashboardController@index')->middleware('verified');

Route::resource('categories', 'CategoriesController');

Route::resource('courses', 'CoursesController');

Route::resource('users', 'UsersController');

Route::resource('explore', 'ExploreController');

Route::resource('subscriptions', 'SubscriptionController');

Route::resource('roles', 'RoleController');