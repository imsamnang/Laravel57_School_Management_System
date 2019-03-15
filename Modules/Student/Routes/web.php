<?php


Route::group(['prefix' => 'admin'], function () {
    Route::resource('student', 'StudentController', ['as' => 'admin']);
});