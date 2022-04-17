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

/*
----------------------------Auth Pages------------------------------------


*/

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('adminPortal');
});

Route::get('/askme', function () { return phpinfo(); });

Route::get('/studentRoster', function () {
    return view('studentRoster');
});
    Route::get('/teacherRoster', function () {
        return view('teacherRoster');
    });
Route::get('/newStudent', function () {
    return view('newStudent');
});

Route::post('/addStudent', 'App\Http\Controllers\StudentController@addStudent');
Route::post('/updateStudent', 'App\Http\Controllers\StudentController@updateStudent');
Route::post('/selectStudent', 'App\Http\Controllers\StudentController@selectStudent');
Route::post('/deleteStudent', 'App\Http\Controllers\StudentController@deleteStudent');
Route::post('/addAdmin', 'App\Http\Controllers\AdminController@addAdmin');
Route::post('/loginAdmin', 'App\Http\Controllers\AdminController@login');
Route::get('/error', function() {
    return view('errorPage'); // Error Page.
});
Route::get('/adminHome', function() {
    return view('adminHome'); // Error Page.
});
Route::get('/success', function() {
    return view('registrationSuccess'); // Error Page.
});
Route::get('/adminRegistration', function() {
    return view('adminRegistration'); // Error Page.
});
Route::get('/adminLogin', function() {
    return view('adminLogin'); // Error Page.
});
