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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
Route::get('/contact/all', 'App\Http\Controllers\ContactController@allData')->name('contact-data');
Route::get('/contact/all/{id}', 'App\Http\Controllers\ContactController@show')->name('show-one-contact');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\ContactController@updateMessage')->name('update-contact');
Route::post('/contact/all/{id}/update/submit', 'App\Http\Controllers\ContactController@updateMessageSubmit')->name('update-submit');
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\ContactController@delete')->name('delete-contact');
