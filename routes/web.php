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
Route::middleware('auth')->group(function(){
Route::get('/logout','AuthController@logout' );
});
Route::get('/','ApiController@indexAction' );
Route::get('/about','ApiController@aboutAction' );
Route::get('/films','ApiController@filmsAction' );
Route::get('/film1','ApiController@film1Action' );
Route::get('/film2','ApiController@film2Action' );
Route::get('/film3','ApiController@film3Action' );
Route::get('/contacts','ApiController@contactsAction' );
Route::get('/maintenance','ApiController@maintenanceAction' );
Route::get('/getarticle','ApiController@getArticle' );
Route::get('/register','ApiController@registerAction' );
Route::get('/login','ApiController@loginAction' );
Route::get('/inf_film_db','ApiController@getinf_film_db' );
Route::get('/auth','AuthController@auth' );
Route::get('/search','ApiController@search' );
Route::get('/registration','AuthController@reg' );
