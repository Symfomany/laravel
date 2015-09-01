<?php

namespace App\Http\Controllers;
use App\Model\Categories;
use App\Model\Movies;


/**
 * Class UsersController
 * @package App\Http\Controllers
 */
class UsersController extends Controller{


    /**
     * /users/index
     * @return \Illuminate\View\View
     */
    public function getIndex(){

        return view('Users/index');
    }



    /**
     * /users/index
     * @return \Illuminate\View\View
     */
    public function postUpdate(){

        return view('Users/create');
    }
    /**
     * /users/index
     * @return \Illuminate\View\View
     */
    public function getCreate(){

        return view('Users/create');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function search($ville = "Lyon", $zipcode = 69002, $enable =1){

        return view('Users/search',
            [
                "ville" => $ville,
                "zipcode" => $zipcode,
                "enable" => $enable
            ]
        );
    }

}













