<?php

namespace App\Access;


class Role{


    public function __construct(){

    }


    public function enabled(User $user){
        return $user->enabled;

    }




}