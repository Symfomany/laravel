<?php

namespace App\Http\Controllers;
use App\Gestion\PhotoGestionInterface;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;


/**
 * Class MoviesController
 * @package App\Http\Controllers
 */
class MoviesController extends Controller
{

    /**
     * @return \Illuminate\View\View
     */
    public function index(){

        return view('Movies/index');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function view($id){

        return view('Movies/view', ['id' => $id]);
    }

    public function getForm(){

//        dump(Config::get('app.locale')); récupérer une configuration
//        dump(config('app.locale')); //récupérer une configuration
//        $compteur = session('compteur'); //helpers
//        session(['compteur' => ++$compteur]);
//        $compteur = session('compteur');
//        dump($compteur);

        return view('Movies/create');
    }

    public function postCreate(ContactRequest $request){

        return view('Movies/confirm');
    }
}
