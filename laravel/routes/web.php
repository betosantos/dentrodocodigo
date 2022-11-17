<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\HomepageController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomepageController@index')->name('homepage');
Route::get('blog', 'HomepageController@blog')->name('blog');
Route::get('servicos', 'HomepageController@servicos')->name('servicos');
