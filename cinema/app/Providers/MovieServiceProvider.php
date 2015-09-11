<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MovieServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);

        $gate->define('update-film', function ($user, $film) {
            return $user->id === $film->administrators_id;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            'App\Gestion\PhotoGestionInterface',
            'App\Gestion\PhotoGestion'
        );

    }
}
