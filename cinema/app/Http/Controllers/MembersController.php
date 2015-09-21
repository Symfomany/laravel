<?php

namespace App\Http\Controllers;
use App\Model\Categories;
use App\Model\Movies;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


/**
 * Class MembersController
 * @package App\Http\Controllers
 */
class MembersController extends Controller{


    /**
     * Form create an user
     * @return \Illuminate\View\View
     */
    public function getLogin(){

        return view('Members/login');
    }

    /**
     * Form create an user
     * @return \Illuminate\View\View
     */
    public function postLogin(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');

        Config::set('auth.model', "App\Model\User");

        if (Auth::attempt(
            ['email' => $email, 'password' => $password])) {
            // Authentication passed...
            Session::flash('success',"Membre authentifié :)");

            return  Redirect::to('members/create');
        }

        Session::flash('danger',"Bad user :(");

        return  Redirect::to('members/login');


    }


    /**
     * Form create an user
     * @return \Illuminate\View\View
     */
    public function getCreate(){
        Config::set('auth.model', "App\Model\User");

        dump(Auth::user());

        return view('Members/create');
    }

    /**
     * Form create an user
     * @return \Illuminate\View\View
     */
    public function postCreate(Request $request){

        $user = new User();
        $user->username = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        //jécris en session un message flash
        Session::flash('success',"Membre crée :)");
        //je redirige
        return  Redirect::to('members/create');
    }
}













