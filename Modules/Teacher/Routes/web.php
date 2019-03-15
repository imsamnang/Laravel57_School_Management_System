<?php

Route::group(['prefix' => 'admin'], function () {
    Route::resource('teacher', 'TeacherController', ['as' => 'admin']);
});
