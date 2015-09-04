<?php

namespace App\Http\Controllers;
use App\Gestion\PhotoGestionInterface;
use App\Http\Requests\ContactRequest;
use App\Model\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
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
    public function search($visibilite = "1", $language= "fr", $duree = 2){

        return view('Movies/search',[
            'visible' => $visibilite,
            'language' => $language,
            'duree' => $duree
        ]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index($bo="*", $visibilite="*", $distributeur="*"){


        //methode  numéro 2 pour créer une requete Query Builder
        $movies = DB::table('movies');

            if($bo != "*"){
                $movies->where('bo', '=', $bo);
            }

            if($visibilite != "*"){
                $movies->where('visible', '=', $visibilite);
            }

            if($distributeur != "*"){
                $movies->where('distributeur', '=', $distributeur);
            }

            //retourne le resultat
        $movies->join('categories', 'movies.categories_id', '=', 'categories.id');
        $movies->select('categories.title as ctitle', 'movies.*');

        $movies = $movies->get();

        //methode  numéro 1 avec ORM Eloquant
//        $critere = array();
//
//            if($bo != "*"){
//                $critere['bo'] = $bo;
//            }
//
//            if($visibilite != "*"){
//                $critere['visible'] = $visibilite;
//            }
//
//            if($distributeur != "*"){
//                $critere['distributeur'] = $distributeur;
//            }
//
//            //retourne le resultat
//        $movies = Movies::where($critere)->get();
//
//        dump($movies);
//        exit();


        // methode numéro 1

        $data = [
            "movies" => $movies,
            "bo" => $bo,
            "visibilite" => $visibilite,
            "distributeur" => $distributeur,
        ];

        return view('Movies/index', $data);
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
