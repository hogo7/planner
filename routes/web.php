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

Route::get('/', 'PagesController@index');


Route::group(['middleware' => ['web']], function () {
    // your routes here
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mbti/{task}/{page?}','TestsController@mbti')->name('mbti');
Route::post('/mbti/create/','mbtiController@create')->name('mbtipost');
Route::get('/tasks/{task}/{page?}','TestsController@tasks')->name('task');
Route::get('/register','registerController@index')->name('register');
Route::post('/register','registerController@create')->name('register');
Route::get('/login','sessionController@index')->name('login');
Route::post('/login','sessionController@createSession')->name('loginPost');
Route::post('/logout','sessionController@deleteSession')->name('logout');
});
