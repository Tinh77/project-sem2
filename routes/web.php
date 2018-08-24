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

Route::get('/admin', function () {
    return view('admin.layout.master-v2');
});
Route::get('/admin/demo-form', function () {
    return view('admin.pages.form');
});


Route::get('/admin/demo-list', function () {
    return view('admin.pages.table');
});

Route::resource('/admin','CategoryController');

Route::get('/client/list-gift', function () {
    return view('client.pages.gift.list');
});
Route::get('/client/pages/list', 'GiftController@listindex');
Route::get('/client/category-gift/{id}', "GiftController@listCategory");

Route::resource('/client/gift', 'GiftController');

Route::resource('/client/transaction', 'TransactionController');

Route::get('/client/home', 'GiftController@indexHome');

Route::get('/client/demo-product-detail', function () {
    return view('client.pages.product-detail');
});

Route::get('/client/404', function () {
    return view('client.404client.404');
});

Route::get('/admin/404', function () {
    return view('admin.404admin.404');
});
Auth::routes();

Route::group(['middleware' => ['twostep']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');

});

Route::post('/login-user', 'login_user@login');

Route::get('/profile', 'ProfileController@index')->middleware('role:admin'); // admin
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/{id}', 'ProfileController@show');
    Route::get('/profile/user/{id}', 'ProfileController@showUser');
});

