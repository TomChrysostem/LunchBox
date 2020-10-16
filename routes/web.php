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
    return view('users.index');
});
Route::get('/service', function () {
    return view('users.service');
});

Route::get('/course', function () {
    return view('users.course');
});
Route::get('/order', function () {
    return view('users.order');
});

Route::get('/apply_course', function () {
    return view('users.apply_course');
});

Route::resource('admin','AdminController')->middleware('auth');
Route::resource('courses','CourseController')->middleware('auth');
Route::resource('services','ServiceController')->middleware('auth');
Route::resource('menus','MenuController')->middleware('auth');
Route::resource('categories', 'CategoryController')->middleware('auth');
Route::resource('orders', 'OrderController')->middleware('auth');
Route::resource('attendees', 'AttendeeController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
