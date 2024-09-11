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

// Parcial 1:

Route::get('/fishes', 'App\Http\Controllers\FishController@index')->name('fish.index');
Route::get('/fishes/register', 'App\Http\Controllers\FishController@register')->name('fish.register');
Route::post('/fishes/save', 'App\Http\Controllers\FishController@save')->name('fish.save');
Route::get('/fishes/success', 'App\Http\Controllers\FishController@success')->name('fish.success');
Route::get('/fishes/stats', 'App\Http\Controllers\FishController@stats')->name('fish.stats');
