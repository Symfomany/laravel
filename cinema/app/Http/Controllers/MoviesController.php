<?php

namespace App\Http\Controllers;
use App\Gestion\PhotoGestionInterface;
use App\Http\Requests\ContactRequest;
use App\Model\Comments;
use App\Model\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
     * Page Contact
     */
    public function create(){

        $actors =  DB::select('select id, firstname, lastname from actors');
        $tab2 = array();
        foreach($actors as $actor){
            $tab2[$actor->id] = $actor->lastname . " " . $actor->firstname;
        }

        $directors =  DB::select('select id, firstname, lastname from directors');
        $tab3 = array();

        foreach($directors as $director){
            $tab3[$director->id] = $director->lastname . " " . $director->firstname;
        }

        $categories =  DB::select('select id, title from categories');
        $tab = array();
        foreach($categories as $category){
            $tab[$category->id] = $category->title;
        }


        return view('Movies/create', [
            'tab' => $tab,
            'tab2' => $tab2,
            'tab3' => $tab3,
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

        $movies = $movies->whereNull('deleted_at')->get();
//        $movies = Movies::onlyTrashed()->restore();

//        $movies = Movies::all();
        $movies = Movies::all();



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
     * @return \Illuminate\View\View
     */
    public function trash(){

        $movies = Movies::onlyTrashed()->get();
        //prendre que les films qui ont été supprimés

        $data = [
            "movies" => $movies,
            "bo" => null,
            "visibilite" => null,
            "distributeur" => null,
        ];

        return view('Movies/index', $data);
    }


    public function flymovie(Request $request){

        $movie = new Movies();
        $movie->title = $request->input('title');
        $movie->synopsis = $request->input('synopsis');
        $movie->categories_id = $request->input('categories_id');
        $movie->save();

        return response()->json(['reponse' => true]);
    }


    public function comment(Request $request, $id){

        Comments::create([
           'content' => $request->input('content'),
           'movies_id' => $id,
           'user_id' => 2,
           'date_created' => new \DateTime('now')
        ]);

        Session::flash('success',"Commentaire a bien été ajouté" );

        //je redirige
//        return  Redirect::route('movies.view', ['id' => $id]);
        return response()->json(['reponse' => false]);
    }



    public function restore($id){
        $movie = Movies::where('id', $id)->restore();

        //je redirige
        return  Redirect::route('movies.index');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function view($id){

        // findOrFail me permet de lancer une exception
        // si il ne trouve pas de film
        $movie = Movies::find($id); //findOrFail()$id

        if(!$movie){ // !$movie <=> $movie == null
            abort(404);
            //abort() est un helper
            // me permettant de lancer un code d'erreur
        }


        return view('Movies/view', ['movie' => $movie]);
    }


    /**
     * Page FAQ
     */
    public function remove($id){

        // supprimer un acteur
        $movie = Movies::find($id);
        $movie->delete();
    }

}
