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

Route::resource('admin/category', 'CategoryController');

Route::get('/admin/demo-list', function () {
    return view('admin.pages.table');
});

Route::get('/client/demo-home','GiftController@indexHome');

Route::get('/client/pages/list',"GiftController@index");
Route::get('/client/pages/list/{id}', "GiftController@listCategory");
Route::get('/client/pages/{id}', "GiftController@show");

Route::get('/client/demo-product-detail', function () {
    return view('client.pages.product-detail');
});
Route::get('/client/gift/form', function () {
    return view('client.pages.gift.form');
});

Route::get('/client/gift/list', function () {
    return view('client.pages.gift.list');
});

Route::get('/client/404', function () {
    return view('client.404client.404');
});

Route::get('/admin/404', function () {
    return view('admin.404admin.404');
});