<?php


Route::get('/', 'PostController@index');
//Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');

//controller +> posts controller

//eloquent model +> post

//migration => create_posts_table


