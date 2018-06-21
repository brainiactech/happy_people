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
    return view('pages.home');
});

Route::get('home', 'PagesController@home');
Route::get('about_us', 'PagesController@about');
Route::get('our_project', 'PagesController@cause');
Route::get('contact_us', 'PagesController@support');

Route::get('media', 'PagesController@media');

Route::get('events', 'PagesController@events');

Route::get('volunteer', 'PagesController@volunteer');

Route::get('recent_projects', 'PagesController@recent');