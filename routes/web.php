<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function() {
    return 'تماس با ما';
});
Route::get('/home', function() {
    return 'صفحه اصلی';
});
Route::get('/about', function() {
    return 'تماس با ما';
});
