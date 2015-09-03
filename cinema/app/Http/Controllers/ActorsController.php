<?php

namespace App\Http\Controllers;
use App\Model\Actors;
use App\Model\Categories;
use App\Model\Movies;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class ActorsController extends Controller{


//    public function __construct()
//    {
//        $this->middleware('auth');
//        $this->middleware('admin');
//    }

    /**
     * Page Index
     */
    public function index($ville = "Paris"){

//        $movies = Movies::all();
//        $movie = Movies::find(1);
//        $model = Movies::findOrFail(1544);
//        $model = Movies::where('visible', '=', 1)->firstOrFail();
//        $model = Movies::where('cover', '=', 1)->take(5)->get();
//        $model = Movies::whereRaw('age > ? and votes = 100',
//                                array(5))->get();
//
//        dump($model);

//        $movie = new Movies;
//
//        $movie->title = 'Okay alpha 512';
//        $movie->description = 'dhfusd hfhsdiufhsifhiu2';
//        $movie->synopsis = 'alpha 56596';
//        $movie->image = 'http://www.google.fr';
//        $movie->annee = 2015;
//        $movie->date_release = new \DateTime('now');
//        $movie->note_presse = 4;
//        $movie->date_created = new \DateTime('now');

//        $movie->save();

//        Movies::destroy(43);

//        $movie = Movies::find(35);
//
//        $movie->type_film = 'Court-Métrage';
//
//        $movie->save();

//        $movies = Movies::popular()->get();
//        $category = Movies::find(35);
//        $movies = Movies::find(35);
//        $movies = Movies::rawQuery();
//        $categories = Categories::find(1)->movies;
//        dump($movies);
//        dump($movies);




        $datas = [
            "actors" => Actors::all()
        ];


        return view('Actors/index', $datas);
    }

    /**
     * Page Contact
     */
    public function create(){

        return view('Actors/create');
    }

    /**
     * Page Mention
     */
    public function update($id){

        $nom = Route::input('nom');
        dump($nom);
        return view('Actors/update', ['id' => $id]);
    }

    /**
     * Page Mention
     */
    public function updateform(){

        $nom = Route::input('nom');
        dump($nom);

    }

    /**
     * Page FAQ
     */
    public function read($id = null){
        $datas = [
            'actor' => Actors::find($id)
        ];

        return view('Actors/read', $datas);
    }

    /**
     * Page FAQ
     */
    public function delete($id){

        // supprimer un acteur
        $actor = Actors::find($id);
        $actor->delete();

        //jécris en session un message flash
        Session::flash('success',"L'acteur {$actor->fitsname} {$actor->lastname} a bien été supprimé" );

        //je redirige
        return  Redirect::route('actors.index');
    }



}













