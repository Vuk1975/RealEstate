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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\FrontPropertiesListController@index');
Route::get('/properties', 'App\Http\Controllers\FrontPropertiesListController@properties')->name('properties');
Route::get('/properties/{slug}/{id}', 'App\Http\Controllers\FrontPropertiesListController@show')->name('property.view');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
	Route::resource('category','App\Http\Controllers\CategoryController');
    Route::resource('subcategory','App\Http\Controllers\SubcategoryController');
    Route::resource('property','App\Http\Controllers\PropertyController');
    Route::get('subcategories/{id}','App\Http\Controllers\PropertyController@loadSubCategories');

    Route::get('/image/create/{id}', [App\Http\Controllers\ImageController::class,'create'])->name('image.create');
    Route::post('image/store/{id}', [App\Http\Controllers\ImageController::class,'store'])->name('image.store');
    Route::any('image/edit/{id}', 'App\Http\Controllers\ImageController@edit')->name('image.edit');
    Route::any('image/update/{id}', 'App\Http\Controllers\ImageController@update')->name('image.update');
    Route::any('image/destroy/{id}', 'App\Http\Controllers\ImageController@destroy')->name('image.destroy');

    Route::get('slider', 'App\Http\Controllers\SliderController@index')->name('slider.index');
	Route::post('slider', 'App\Http\Controllers\SliderController@store')->name('slider.store');
	Route::get('slider/create', 'App\Http\Controllers\SliderController@create')->name('slider.create');
    Route::get('slider/edit/{id}', 'App\Http\Controllers\SliderController@edit')->name('slider.edit');
    Route::any('slider/update/{id}', 'App\Http\Controllers\SliderController@update')->name('slider.update');
	Route::delete('slider/{id}', 'App\Http\Controllers\SliderController@destroy')->name('slider.destroy');
    Route::resource('tag', 'App\Http\Controllers\TagController');
    
    //Attach / Detach Tags to Property
    Route::get('/property/{property_id}/tag/{tag_id}/attach', 'App\Http\Controllers\PropertyTagController@attachTag');
    Route::get('/property/{property_id}/tag/{tag_id}/detach', 'App\Http\Controllers\PropertyTagController@detachTag');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
