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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/','PagesController@index')->name('index');
Route::get('/about','PagesController@about')->name('about');
Route::get('/contact','PagesController@contact')->name('contact');

Route::post('/contact', 'PagesController@contactStore') ->name('contactstore');
Route::get('thankyou/{fname}','PagesController@thankyou')->name('thankyou');
