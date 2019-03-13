<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Create Language Translation route
Route::get('languages', 'Admin\\LanguageTranslationController@index')->name('languages');
Route::post('translations/update', 'Admin\\LanguageTranslationController@transUpdate')->name('translation.update.json');
Route::post('translations/updateKey', 'Admin\\LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
Route::delete('translations/destroy/{key}', 'Admin\\LanguageTranslationController@destroy')->name('translations.destroy');
Route::post('translations/create', 'Admin\\LanguageTranslationController@store')->name('translations.create');

Route::get('check-translation', function(){
	\App::setLocale('fr');
	
	dd(__('website'));
});

// Language Route for Switching
Route::post('/lang', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'Admin\\LanguageController@index',
))->name('lang');

// For Language direct URL link
Route::get('/lang/{lang}', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'Admin\\LanguageController@change',
))->name('langChange');
//End of Language Route

