<?php

// Route::prefix('phagna')->group(function() {
//     Route::get('/', 'PhagnaController@index');
// });

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/phagna', 'PhagnaController', ['as' => 'admin']);
});