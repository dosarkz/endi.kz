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
    return view('welcome');
})->name('main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('projects', 'SiteController@projects')->name('projects');
Route::get('about', 'SiteController@about')->name('about');
Route::get('contacts', 'SiteController@contacts')->name('contacts');
Route::get('advantages', 'SiteController@advantages')->name('advantages');
