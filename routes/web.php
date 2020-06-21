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

Route::get('/', function () {
    return view('frontend/welcome');
});
Route::get('/blog', function () {
    return view('frontend/blog');
});
Route::get('/contact', function () {
    return view('frontend/contact');
});
Route::get('/blog-details', function () {
    return view('frontend/blog-details');
});
Route::get('/shop-details', function () {
    return view('frontend/shop-details');
});
Route::get('/shoping-card', function () {
    return view('frontend/shoping-card');
});
Route::get('/cheekout', function () {
    return view('frontend/cheekout');
});
Route::get('/shop-grid', function () {
    return view('frontend/shop-grid');
});


Auth::routes();


Route::group(['as'=>'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','admin']], function () {

    Route::get('Dashboard','DashboardController@index')->name('Dashboard');
    Route::resource('teg', 'TegConteoller');
    Route::resource('category', 'CategoryController');


    Route::get('profile','DashboardController@profile')->name('profile');

});

Route::group(['as'=>'author.','prefix' => 'author','namespace' => 'Author','middleware' => ['auth','author']], function () {

    Route::get('Dashboard','DashboardController@index')->name('Dashboard');
    Route::get('profile','DashboardController@profile')->name('profile');



});

