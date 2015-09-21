<?php

namespace App\Providers;

use App\Model\Movies;
use App\Policies\MoviePolicy;
use App\User;
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


    /**
     * Methode de chrgement de mes politiques d'authorisation
     * @param GateContract $gate
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);


        // je determine une politique d'authorisation sur mon user
        // superadmin est le nom de ma politique de sécurité
        // $user est mon utilisateur connecté
        $gate->define('superadmin', function ($user) {
            return $user->super_admin == 1 ? true : false;
        });


        $gate->define('hasmovie', function ($user, $movie) {
//            if($user->super_admin){ return true };
            return $movie->administrators_id == $user->id ? true : false;
        });


        $gate->define('date_expire', function ($user) {

            $date = new \DateTime('now');
            return new \DateTime($user->expired_at) > $date;

        });



    }


}
