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
    return view('admin.layout.app');
});
Route::get('/admin/demo-list', function () {
    return view('admin.product.list');
});

Route::get('/admin/demo-form', function () {
    return view('admin.product.form');
});


Route::get('/admin/demo-list-category', function () {
    return view('admin.category.list');
});

Route::get('/client', function () {
    return view('client.pages.home');
});

Route::get('/client/list', function () {
    return view('client.pages.list');
});
