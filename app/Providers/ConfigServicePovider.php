<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider {
	public function register()
	{
		config([
			'laravellocalization.supportedLocales' => [
				'kh' => array( 'name' => 'Khmer', 'script' => 'Latn', 'native' => 'Khmer' ),
				'ar'  => array( 'name' => 'Arabi', 'script' => 'Latn', 'native' => 'Arabi' ),
				'en'  => array( 'name' => 'English', 'script' => 'Latn', 'native' => 'English' ),
			],

			'laravellocalization.useAcceptLanguageHeader' => true,

			'laravellocalization.hideDefaultLocaleInURL' => true
		]);
	}

}