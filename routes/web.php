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
Route::get('/about', function () {
     return view('about');
});
Route::get('/films', function () {
    return view('films');
});
Route::get('/film1', function () {
    return view('film1');
});
Route::get('/film2', function () {
    return view('film2');
});
Route::get('/film3', function () {
    return view('film3');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/maintenance', function () {
    return view('maintenance');
});
