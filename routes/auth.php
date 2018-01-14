<?php

// Routes that require authentication.

// Posts
Route::get('posts/create', [
    'uses' => 'createPostController@create',
    'as' => 'posts.create'
]);

Route::post('posts/create', [
    'uses' => 'createPostController@store',
    'as' => 'posts.store'
]);
