	<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/posts', 'Admin\\PostsController');

Route::view('admin','layouts.backend.master');