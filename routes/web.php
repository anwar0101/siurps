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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('resultview/view', 'ResultViewController@view')->name('resultview.view');
Route::post('results/view', 'ResultEntryController@view')->name('results.view');

Route::get('/admin', function() {
    return view('admin.dashboard');
});

Route::resource('students', 'StudentController');
Route::resource('courses', 'CourseController');
Route::resource('departments', 'DepartmentController');
Route::resource('results', 'ResultEntryController');
Route::resource('sessonals', 'MidsessonController');
Route::resource('resultview', 'ResultViewController');
Route::resource('admins', 'AdminController');
