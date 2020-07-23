<?php

use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')
            ->namespace('Admin')
            ->middleware('auth')
            ->group(function(){

               

    /** 
     *  Routes Product X Category
    */

    Route::get('products/{id}/category/{idCategory}/detach', 'CategoryProductController@detachCategorysProduct')->name('products.category.detach');
    Route::post('products/{id}/categories/store', 'CategoryProductController@attachCategoriesProduct')->name('products.categories.attach');
    Route::any('products/{id}/categories/create', 'CategoryProductController@categoriesAvailable')->name('products.categories.available');
    Route::get('products/{id}/categories/create', 'CategoryProductController@categoriesAvailable')->name('products.categories.available');
    Route::get('products/{id}/categories', 'CategoryProductController@categories')->name('products.categories');
    Route::get('categories/{id}/products', 'CategoryProductController@products')->name('categories.products');
   
    /** 
     *  Routes Products
    */

    Route::any('products/search', 'ProductController@search')->name('products.search');
    Route::resource('products', 'ProductController');
    


    /** 
     *  Routes Categories
    */

    Route::any('categories/search', 'CategoryController@search')->name('categories.search');
    Route::resource('categories', 'CategoryController');

   
});

/**
 * Routes Site
 */

Route::get('', 'SiteController@index');


/**
 * Auth Routes
 */
Auth::routes();


