<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/reviews', 'App\Http\Controllers\ReviewController@index')->name('review.index');
Route::get('/reviews/create', 'App\Http\Controllers\ReviewController@create')->name('review.create');
Route::post('/reviews/save', 'App\Http\Controllers\ReviewController@save')->name('review.save');
Route::get('/reviews/success', 'App\Http\Controllers\ReviewController@success')->name('review.success');
Route::get('/reviews/nonexistent', 'App\Http\Controllers\ReviewController@nonexistent')->name('review.nonexistent');
Route::get('/reviews/{id}', 'App\Http\Controllers\ReviewController@show')->name('review.show');
Route::delete('/reviews/{id}', 'App\Http\Controllers\ReviewController@destroy')->name('review.destroy');

# Parcial 1:

Route::get('/fishes', 'App\Http\Controllers\FishController@index')->name('Fish.index');
Route::get('/fishes/create', 'App\Http\Controllers\FishController@create')->name('Fish.create');
Route::post('/fishes/save', 'App\Http\Controllers\FishController@save')->name('Fish.save');
Route::get('/fishes/success', 'App\Http\Controllers\FishController@success')->name('Fish.success');
Route::get('/fishes/stats', 'App\Http\Controllers\FishController@stats')->name('Fish.stats');
