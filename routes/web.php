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

Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
Route::get('/admin', 'AdminController@index')->name('admin_home');

// Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);

Route::group(['middleware' => 'auth'], function(){

    Route::post('admin/product', 'ProductController@store')->name('product.store');
    Route::get('admin/product/create', 'ProductController@create')->name('product.create');
    Route::patch('admin/product/{slug}', 'ProductController@update')->name('product.update');
    Route::delete('admin/product/{slug}', 'ProductController@destroy')->name('product.destroy');
    Route::get('admin/product/{slug}/edit', 'ProductController@edit')->name('product.edit');
    Route::get('admin/products', 'ProductController@index')->name('product.index');
    Route::get('admin/product/{slug}', 'ProductController@show')->name('product.show');

    Route::post('admin/article', 'ArticleController@store')->name('article.store');
    Route::get('admin/article/create', 'ArticleController@create')->name('article.create');
    Route::patch('admin/article/{slug}', 'ArticleController@update')->name('article.update');
    Route::delete('admin/article/{slug}', 'ArticleController@destroy')->name('article.destroy');
    Route::get('admin/article/{slug}/edit', 'ArticleController@edit')->name('article.edit');
    Route::get('admin/articles', 'ArticleController@index')->name('article.index');
    Route::get('admin/particleroduct/{slug}', 'ArticleController@show')->name('article.show');

    //Дорабатываем категории
    Route::post('admin/product-category', 'ProductController@store')->name('product-category.store');
    Route::get('admin/product-category/create', 'ProductController@create')->name('product-category.create');
    Route::patch('admin/product-category/{slug}', 'ProductController@update')->name('product-category.update');
    Route::delete('admin/product-category/{slug}', 'ProductController@destroy')->name('product-category.destroy');
    Route::get('admin/product-category/{slug}/edit', 'ProductController@edit')->name('product-category.edit');
    Route::get('admin/product-categories', 'ProductController@index')->name('product-categories.index');
    Route::get('admin/product-category/{slug}', 'ProductController@show')->name('product-category.show');
    // Route::resource('admin/article', 'ArticleController');
});

Route::get('/kontakty', 'SiteController@kontakty')->name('kontakty');

Route::get('/o-kompanii', 'SiteController@okompanii')->name('o-kompanii');

Route::get('/', 'SiteController@index')->name('index');

Route::get('/staty', 'SiteController@staty')->name('staty');
Route::get('/statya/{slug}', 'SiteController@statya')->name('statya');

Route::get('/politics', 'SiteController@politics')->name('politics');

Route::get('/tovary/{slug}', 'SiteController@tovary')->name('tovary');
Route::get('/tovary', 'SiteController@firsttovar')->name('firsttovar');

Route::post('send-order', 'MailController@sendOrder');
Route::post('send-request', 'MailController@sendRequestMain');
Route::post('send-request-contacts', 'MailController@sendRequestContacts');




