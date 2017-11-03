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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/',['uses'=>'PagesController@index']);
Route::get('/project',['uses'=>'PagesController@project']);
Route::get('/participants',['uses'=>'ParticipantsContoller@index']);
Route::get('/participants/{page}',['uses'=>'ParticipantsContoller@index']);
Route::get('/participants/active?page={page}',['uses'=>'ParticipantsContoller@active']);
Route::get('/participants/disabled?page={page}',['uses'=>'ParticipantsContoller@disabled']);
Route::get('/pastinternship',['uses'=>'PagesController@pastinternship']);
Route::get('/blog',['uses'=>'PagesController@blog']);
Route::get('/task',['uses'=>'PagesController@task']);
Route::get('/library',['uses'=>'PagesController@library']);
Route::get('/supporters',['uses'=>'PagesController@supporters']);
Route::get('/about',['uses'=>'PagesController@about']);
Route::get('/contact',['uses'=>'PagesController@contact']);
