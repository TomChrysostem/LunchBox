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
// Route::get('/service', function () {
//     return view('service');
// });

// Route::get('/course', function () {
//     return view('course');
// });

Route::resource('admin','AdminController')->middleware('auth');
Route::resource('courses','CourseController')->middleware('auth');
Route::resource('services','ServiceController')->middleware('auth');
Route::resource('menus','MenuController')->middleware('auth');
Route::resource('categories', 'CategoryController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
