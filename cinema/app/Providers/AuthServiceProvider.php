<?php

namespace App\Providers;

use App\Model\Movies;
use App\Policies\MoviePolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Movies::class => MoviePolicy::class,
    ];
}
