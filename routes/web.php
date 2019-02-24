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

Route::get('/', 'MainController@index');
Route::post('/send_mail', 'MainController@send_mail');
Route::get('/services','MainController@services');
Route::get('/info_gravura','MainController@info_gravura');
Route::get('/info_decor','MainController@info_decor');
Route::get('/info_const','MainController@info_const');
Route::get('/info_auto','MainController@info_auto');
Route::get('/info_casete','MainController@info_casete');
Route::get('/info_autocolant','MainController@info_autocolant');
Route::get('/info_litere','MainController@info_litere');
Route::get('/info_suprafete','MainController@info_suprafete');
Route::get('/info_pos','MainController@info_pos');
Route::get('/about','MainController@about');
Route::get('/contacts','MainController@contacts');
Route::get('/order','MainController@order');

Route::post('/orderform','MainController@orderform')->name('orderform');

Route::post('/language',array(
    'Middleware' => 'LanguageSwitcher',
    'uses' =>'LanguageController@index'
));
