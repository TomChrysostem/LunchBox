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
})->name('user.home');
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
Route::get('course', 'UserController@courses')->name('user.course');
Route::get('service', 'UserController@menus')->name('user.service');
Route::get('apply/{id}', 'UserController@applyCourse')->name('user.apply');
Route::post('booking', 'UserController@bookCourse')->name('user.booking');
Route::get('order/{id}', 'UserController@orderMenu')->name('user.order');
Route::get('view-course/{id}', 'UserController@courseDetail')->name('user.view-course');
Route::post('view-menu', 'UserController@menuDetail')->name('user.view-menu');
Route::post('serve', 'UserController@bookMenu')->name('user.serve');
Route::post('contact-us', 'ContactController@saveContact')->name('user.contact-us');
Route::get('home', 'HomeController@index')->name('home');
