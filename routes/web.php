<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    /*
    **********
     users
    **********
    */
    Route::get('/users', 'UsersController@index')->name('admin.users.list');
    Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('/users/create', 'UsersController@store')->name('admin.users.store');
    Route::get('/users/delete/{id}', 'UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{id}', 'UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{id}', 'UsersController@update')->name('admin.users.update');

    /*
    **********
     files
    **********
    */

    Route::get('/files', 'FilesController@index')->name('admin.files.list');
    Route::get('/files/create', 'FilesController@create')->name('admin.files.create');
    Route::post('/files/create', 'FilesController@store')->name('admin.files.store');
    Route::get('/files/edit/{id}', 'FilesController@store')->name('admin.files.edit');
    Route::post('/files/edit/{id}', 'FilesController@update')->name('admin.files.update');
    Route::get('/files/delete/{id}', 'FilesController@delete')->name('admin.files.delete');


    /*
    **********
    plans
    **********
    */

    Route::get('/plans', 'PlansController@index')->name('admin.plans.list');
    Route::get('/plans/create', 'PlansController@create')->name('admin.plans.create');
    Route::post('/plans/create', 'PlansController@store')->name('admin.plans.store');
    Route::get('/plans/edit/{id}', 'PlansController@edit')->name('admin.plans.edit');
    Route::post('/plans/edit/{id}', 'PlansController@update')->name('admin.plans.update');
    Route::get('/plans/delete/{id}', 'PlansController@delete')->name('admin.plans.delete');


    /*
    **********
    packages
    **********
    */

    Route::get('/packages', 'PackagesController@index')->name('admin.packages.list');
    Route::get('/packages/create', 'PackagesController@create')->name('admin.packages.create');
    Route::post('/packages/create', 'PackagesController@store')->name('admin.packages.store');
    Route::get('/packages/edit/{id}', 'PackagesController@edit')->name('admin.packages.edit');
    Route::post('/packages/edit/{id}', 'PackagesController@update')->name('admin.packages.update');
    Route::get('/packages/delete/{id}', 'PackagesController@delete')->name('admin.packages.delete');
    Route::get('/packages/sync_files/{id}', 'PackagesController@sync_files')->name('admin.packages.sync_files');
    Route::post('/packages/sync_files/{id}', 'PackagesController@update_sync_files')->name('admin.packages.update_sync_files');

});