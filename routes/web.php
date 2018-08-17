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

Route::get('/client', function () {
    return view('client.pages.home');
});

Route::get('/client/list', function () {
    return view('client.pages.list');
});

Route::get('/client/product-detail', function () {
    return view('client.pages.product-detail');
});