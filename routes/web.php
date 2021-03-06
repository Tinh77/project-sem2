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
Route::get('/client/list-gift', function () {
    return view('client.pages.gift.list');
});
Route::get('/client/pages/list', 'GiftController@listindex');
Route::get('/client/category-gift/{id}', "GiftController@listCategory");
Route::resource('/client/gift', 'GiftController');
Route::post('/client/gift/search', 'GiftController@searchBySection');
Route::get('/client/gift/search/{string}', 'GiftController@search');
Route::post('/client/gift/{id}/inform', 'NotificationController@create');
Route::post('/client/gift/{id}/confirm', 'NotificationController@edit');
Route::get('/client/transaction', 'TransactionController@index');
Route::get('/client/transaction/{id}', 'TransactionController@show');
Route::get('/listposted', 'GiftController@listIndexPosted');
Route::get('/client/transaction/details/{id}', 'TransactionController@showDetails');
Route::post('/client/transaction/confirm', 'TransactionController@confirmStatus');
Route::post('/client/transaction/refresh', 'TransactionController@refreshStatus');
Route::get('/client/demo-product-detail', function () {
    return view('client.pages.product-detail');
});
Route::get('/client/spin', function () {
    return view('client.pages.spin.spinner');
});
Route::get('/client/404', function () {
    return view('client.404client.404');
});
Route::get('/client/about', function () {
    return view('client.about.about_us');
});
Route::get('/admin/404', function () {
    return view('admin.404admin.404');
});
Auth::routes();
Route::group(['middleware' => ['twostep']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/client/home', 'GiftController@indexHome');
});
Route::get('/profile', 'ProfileController@index')->middleware('role:admin'); // admin
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile/{id}', 'ProfileController@show');
    Route::get('/profile/user/{id}', 'ProfileController@showUser');
});
Route::get('/profile/{id}', 'ProfileController@show');
Route::get('/pages/personal_information', function () {
    return view('client.pages.gift.personal_information');
});
// super duper admin panel
Route::group(['prefix' => config('laravelusers.prefix'), 'middleware' => 'web', 'namespace' => 'Admin'], function () {
    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
    ]);
    Route::resource('categories', 'CategoriesManagementController', [
        'names' => [
            'index'   => 'categories',
            'destroy' => 'category.destroy',
        ],
    ]);
    Route::resource('gifts', 'GiftsManagementController', [
        'names' => [
            'index'   => 'gifts',
            'destroy' => 'gift.destroy',
        ],
    ]);
    Route::resource('transactions', 'TransactionsManagementController', [
        'names' => [
            'index'   => 'transactions',
            'destroy' => 'transaction.destroy',
        ],
    ]);
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::post('search-users', '\App\Http\Controllers\Admin\UsersManagementController@search')->name('search-users');
});

//Route::get('/send-mail', 'EmailController@send');
Route::get('/client/post1', function () {
    return view('client.posts.post1');
});

Route::get('/client/pages/post2', function () {
    return view('client.posts.post2');
});

Route::get('/client/post3', function () {
    return view('client.posts.post3');
});


Route::get('/contact_us', function () {
    return view('client.pages.contact_us');
});

