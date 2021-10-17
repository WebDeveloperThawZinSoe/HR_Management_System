<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/','PageController@index');
    
    /* Accounts */
    Route::get("/accounts/show",'AccountController@index');
    Route::get("/accounts/create",'AccountController@create');

    /* Department */
    Route::get("/department/show","DepartmentController@index");
    Route::get("/department/create",'DepartmentController@create');
    Route::post("/department/create",'DepartmentController@filled_data');
    Route::get("/department/{id}/delete","DepartmentController@delete");
    Route::get("/department/{id}/edit","DepartmentController@edit");
    Route::post("/department/{id}/edit","DepartmentController@upgrade");
});
