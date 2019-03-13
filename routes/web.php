<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Create Language Translation route
Route::get('languages', 'LanguageTranslationController@index')->name('languages');
Route::post('translations/update', 'LanguageTranslationController@transUpdate')->name('translation.update.json');
Route::post('translations/updateKey', 'LanguageTranslationController@transUpdateKey')->name('translation.update.json.key');
Route::delete('translations/destroy/{key}', 'LanguageTranslationController@destroy')->name('translations.destroy');
Route::post('translations/create', 'LanguageTranslationController@store')->name('translations.create');
Route::get('check-translation', function(){
	\App::setLocale('fr');
	
	dd(__('website'));
});

// Language Route for Switching
Route::post('/lang', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index',
))->name('lang');

// For Language direct URL link
Route::get('/lang/{lang}', array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@change',
))->name('langChange');
//End of Language Route

