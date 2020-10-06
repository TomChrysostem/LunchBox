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
    return view('index');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/course', function () {
    return view('course');
});

Route::resource('admin','AdminController');
Route::resource('courses','CourseController');
Route::resource('services','ServiceController');
Route::resource('menus','MenuController');
Route::resource('categories', 'CategoryController');

// fullcalendar
Route::get('/booking','FullCalendarController@index');
Route::post('/booking/create','FullCalendarController@create');
Route::post('/booking/update','FullCalendarController@update');
Route::post('/booking/delete','FullCalendarController@destroy');

//contact form
// Render in view
Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);