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

    Route::post('product', 'ProductController@store')->name('product.store');
    Route::get('product/create', 'ProductController@create')->name('product.create');
    Route::patch('product/{slug}', 'ProductController@update')->name('product.update');
    Route::delete('product/{slug}', 'ProductController@destroy')->name('product.destroy');
    Route::get('product/{slug}/edit', 'ProductController@edit')->name('product.edit');
    Route::get('product', 'ProductController@index')->name('product.index');

    Route::resource('article', 'ArticleController');
    Route::resource('variation', 'VariationController');
});

Route::get('/kontakty', function () {
    return view('site.kontakty');
})->name('kontakty');

Route::get('/o-kompanii', function () {
    return view('site.o-kompanii');
})->name('o-kompanii');

Route::get('/', function () {
    return view('site.index');
})->name('index');

Route::get('/staty', function () {
    return view('site.staty');
})->name('staty');

Route::get('/politics', function () {
    return view('site.politics');
})->name('politics');

Route::get('/tovary', function () {
    return view('site.tovary');
})->name('tovary');


Route::get('product/{slug}', 'ProductController@show')->name('product.show');


