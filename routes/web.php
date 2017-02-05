<?php

Route::get('/', ['as' => 'home', 'uses' => 'PastesController@create']);
Route::post('/', 'PastesController@post');
Route::get('{paste}', ['as' => 'show', 'uses' => 'PastesController@show']);
Route::get('{paste}/raw', ['as' => 'raw', 'uses' => 'PastesController@raw']);
Route::get('fork/{paste}', ['as' => 'edit', 'uses' => 'PastesController@edit']);
Route::post('fork/{paste}', 'PastesController@fork');
