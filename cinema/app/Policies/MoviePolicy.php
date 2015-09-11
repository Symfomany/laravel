<?php


namespace App\Policies;


use App\Model\Movies;
use App\User;

class MoviePolicy
{

    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\User  $user
     * @param  \App\Post  $post
     * @return bool
     */
    public function update(User $user, Movies $movie)
    {
        return $user->id === $movie->administrators_id;
    }


}