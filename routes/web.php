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

Route::get('/', 'HomeController@index')->name('home');

Route::get('studenti', 'StudentController@index')->name('students.index');
Route::get('studenti/{slug?}', 'StudentController@show')->name('students.show');

Route::get('privacy-policy', 'StaticPageController@privacyPolicy')->name('static_page.privacy_policy');
Route::get('work-with-us', 'StaticPageController@workWithUs')->name('static_page.work_with_us');
