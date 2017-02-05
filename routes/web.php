<?php

Route::get('/', ['as' => 'home', 'uses' => 'PastesController@create']);
Route::post('/', 'PastesController@post');
Route::get('{hash}', ['as' => 'show', 'uses' => 'PastesController@show']);
Route::get('{hash}/raw', ['as' => 'raw', 'uses' => 'PastesController@raw']);
Route::get('fork/{hash}', ['as' => 'edit', 'uses' => 'PastesController@edit']);
Route::post('fork/{hash}', 'PastesController@fork');
