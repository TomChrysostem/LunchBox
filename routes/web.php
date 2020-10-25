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

// Route::get('/course', function () {
//     return view('users.course');
// });

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::resource('courses','CourseController');
    Route::resource('services','ServiceController');
    Route::resource('menus','MenuController');
    Route::resource('categories', 'CategoryController');
    Route::resource('orders', 'OrderController');
    Route::resource('attendees', 'AttendeeController');
});

Route::resource('admin','AdminController')->middleware('auth');

Auth::routes();
Route::get('/course', 'UserController@courses')->name('users.course');
Route::get('/service', 'UserController@menus')->name('users.service');
Route::post('/booking', 'UserController@bookCourse')->name('users.booking');
Route::post('/order', 'UserController@bookMenus')->name('users.order');
Route::get('/home', 'HomeController@index')->name('home');
