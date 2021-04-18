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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
	Route::resource('category','App\Http\Controllers\CategoryController');
    Route::resource('subcategory','App\Http\Controllers\SubcategoryController');
    Route::resource('property','App\Http\Controllers\PropertyController');
    Route::get('subcategories/{id}','App\Http\Controllers\PropertyController@loadSubCategories');
    
