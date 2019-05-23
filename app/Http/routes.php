<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@dashboard');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('soal/t_kemampuan_verbal', 'SoalController@t_kemampuan_verbal');
Route::get('soal/t_kemampuan_verbal/1', 'SoalController@show_soal_t_kemampuan_verbal');
Route::post('soal/t_kemampuan_verbal/1', 'SoalController@submit_t_kemampuan_verbal');
Route::post('soal/t_kemampuan_verbal/2', 'SoalController@submit_t_kemampuan_verbal_2');

Route::get('soal/t_logika', 'SoalController@t_logika');
Route::get('soal/t_logika/1', 'SoalController@show_soal_t_logika');
Route::post('soal/t_logika/1', 'SoalController@submit_t_logika');
Route::post('soal/t_logika/2', 'SoalController@submit_t_logika_2');

Route::get('soal/t_pengetahuan_umum', 'SoalController@t_pengetahuan_umum');
Route::get('soal/t_pengetahuan_umum/1', 'SoalController@show_soal_t_pengetahuan_umum');
Route::post('soal/t_pengetahuan_umum/1', 'SoalController@submit_t_pengetahuan_umum');
Route::post('soal/t_pengetahuan_umum/2', 'SoalController@submit_t_pengetahuan_umum_2');