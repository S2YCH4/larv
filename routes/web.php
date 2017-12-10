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


Route::group([
    'middleware' => 'roles',
    'roles' => 'Admin'
], function(){
    
    
    Route::get('admin/pages', [
        'uses' => 'Pages\AdminPagesController@index',
        'as' => 'pages.index'
    ]);
    
    Route::get('admin/pages/create', [
        'uses' => 'Pages\AdminPagesController@create',
        'as' => 'pages.create'
    ]);
    
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
