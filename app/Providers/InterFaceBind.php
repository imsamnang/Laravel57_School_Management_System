<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class InterFaceBind extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            'App\Repository\InterFaces\UserInterface',
            'App\Repository\Eloquent\UserEloquent'
        );
        $this->app->bind(
            'App\Repository\InterFaces\GroupInterface',
            'App\Repository\Eloquent\GroupEloquent'
        );
        $this->app->bind(
            'App\Repository\InterFaces\RolesInterface',
            'App\Repository\Eloquent\RolesEloquent'
        );
        $this->app->bind(
            'App\Repository\InterFaces\HomeInterface',
            'App\Repository\Eloquent\HomeEloquent'
        );
        $this->app->bind(
            'App\Repository\InterFaces\MenuInterface',
            'App\Repository\Eloquent\MenuEloquent'
        );
        $this->app->bind(
            'App\Repository\InterFaces\PageInterface',
            'App\Repository\Eloquent\PageEloquent'
        );


        require_once __DIR__.'/ExtraInterfaces.php';

    }
}
