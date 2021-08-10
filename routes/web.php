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
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('listcoordinator', function () {
    return view('listcoordinator');
});

Route::get('proofcoordinator', function () {
    return view('proofcoordinator');
});

Route::get('scholarshipdetails', function () {
    return view('scholarshipdetails');
});

Route::get('scholarshipprograms', function () {
    return view('scholarshipprograms');
});

Route::get('scholarshipprofilecoordinator', function () {
    return view('scholarshipprofilecoordinator');
});

Route::get('scholarshipdetails', function () {
    return view('scholarshipdetails');
});

Route::get('scholarsprofilecoordinator', function () {
    return view('scholarsprofilecoordinator');
});

Route::get('welcome', function () {
    return view('welcome');
});













