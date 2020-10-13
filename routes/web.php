<?php

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
    return view('home');
})->name('home');

Auth::routes();

Route::get('/member-home', 'HomeController@index')->name('member-home');

Route::prefix('/admin')->namespace('Admin')->group(function () {
    Route::get('/dashboard', 'UserController@index')->name('admin-dashboard');
});

Route::get('/how-we-work', 'publicController@index')->name('work');
Route::get('/teachers', 'publicController@teacher')->name('teacher');
Route::get('/covid-19', 'publicController@covid')->name('covid');
Route::get('/contact-us', 'ContactController@index')->name('contact');
Route::post('/contact-us-data', 'ContactController@create')->name('contact.send');


