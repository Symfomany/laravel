<?php

namespace App\Http\Controllers;
use App\Model\Actors;
use App\Model\Categories;
use App\Model\Movies;


/**
 * Class ActorsController
 * @package App\Http\Controllers
 */
class ActorsController extends Controller{


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
        return view('Actors/read', ['id' => $id]);
    }

    /**
     * Page FAQ
     */
    public function delete($id){

        return redirect('/actors/index', ['id' => $id]); //redirection vers l'index
    }



}













