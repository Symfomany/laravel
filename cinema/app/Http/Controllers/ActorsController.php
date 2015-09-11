<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActorsRequest;
use App\Model\Actors;
use App\Model\Movies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
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


//        $actor = Actors::find(33);
//        $actor->delete();

        // destroy me permet donc de supprimer un acteur par son ID
        //Actors::destroy(6955);


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
        $categories =  DB::select('select id, title from movies');
        $tab = array();
        foreach($categories as $film){
            $tab[$film->id] = $film;
        }

        return view('Actors/create', ['tab' => $tab]);
    }

    /**
     * ActorsRequest est une classe de validaton de formulaire
     * Cette classe est liée à la requête, c'est une classe FormRequest
     * Le mécanisme de validation de formulaire dans Laravel
     * valide le formulaire et fais une redirection vers create
     * quand mon formulaire contient des erreurs sinon rentre
     * dans l'action store()
     */
    public function store(ActorsRequest $request){

        // J'enregistre un nouvel acteur dès que mon
        // formulaire est valide(0 erreurs)

        // Create a new user in the database...

        $actor = new Actors();
        $actor->firstname = $request->firstname;
        $actor->lastname = $request->lastname;
        $actor->dob = date_create_from_format("d/m/Y", $request->dob); //create from format => DateTime::createFromFormat
        $actor->biography = $request->biography;
        $actor->roles = $request->roles;
        $actor->nationality = $request->nationality;
        $actor->recompenses = $request->recompenses;

        $filename = ""; //define null
        if($request->hasFile('image'))
        {
            //save the name of file upload
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();

            // Move upload
            $destinationPath = public_path() . '/uploads/actors/'; // path vers public/
            $file->move($destinationPath, $filename); //move the image file into public/uploads
        }

        $actor -> image = asset("uploads/actors/". $filename);
        //url vers l'image http://localhost:8000/uploads/actors/.00
        $actor->save();

        //jécris en session un message flash
        Session::flash('success',"L'acteur {$actor->firstname} {$actor->lastname} a bien été crée" );

        //je redirige
        return  Redirect::route('actors.index');

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













