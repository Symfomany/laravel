<?php

namespace App\Http\Controllers;


use App\Model\Actors;
use App\Model\Categories;
use App\Model\Comments;
use App\Model\Directors;
use App\Model\Movies;
use App\Model\Notifications;
use App\User;
use App\Model\User as MUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;


/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller{


    public function __construct(){

//        if (Gate::denies('date_expire')) {
//            abort(403);
//        }

//        $user = Auth::user();
//        if ($user->cannot('checkenabled')) {
//        }
    }


    /**
     * Page Mention
     */
    public function index(){

//        abort(403, "Vous n'avez pas les droits nécessaires");


//        if (Gate::denies('checkexpired')){
//            abort(403);
//        }

        if (Gate::denies('date_expire')) {
            abort(403);
        }

        return view('Pages/index', [
            'comments' => Comments::orderBy('id', 'desc')->get()
        ]);
    }
    /**
     * Page Mention
     */
    public function indexAdvanced(){

        $user = User::find(3);

        Auth::login($user);

//        $query = Db::table('movies')
//             ->join('categories','categories.id', '=', 'movies.categories_id')
//            ->addSelect('categories.title as ctitle')
//            ->where('visible', 1)
//            ->toSql();
//        exit(dump($query));


        $actors = Actors::nbPerCity()->get();

//        $directors = [];
//
//        $begin = new \DateTime( '-5 year' );
//        $end = new \DateTime( '+1year' );


//        for($i = $begin->format('Y'); $i < $end->format('Y'); $i++){
//            echo $i;
//        }
//        exit();



//        $interval = new \DateInterval('P1Y');
//        $daterange = new \DatePeriod($begin, $interval ,$end);
//
//        $directors = [];
//        foreach($daterange as $date){
//           $directors[$date->format('Y')] =
//               Directors::nbBestDirectors($date->format('Y'))->get()->toArray();
//        }





        $directors = Directors::getIdsBestDirectors()->get()->toArray();
        $ids = array_column($directors, 'id');

        $begin = new \DateTime( '-5 year' );
        $end = new \DateTime( '+1year' );

        $interval = new \DateInterval('P1Y');
        $daterange = new \DatePeriod($begin, $interval ,$end);


        $directors = [];

        foreach($daterange as $date){
            foreach($ids as $id){
                $directors[$date->format('Y')][$id] =
//                    array(
//                        'name' => Directors::find($id)->lastname ." ". Directors::find($id)->firstname,
//                        'nb' => Directors::find($id)->movies()
//                            ->where(DB::raw('YEAR(date_release)'), $date->format('Y'))
//                            ->count()
//                    );
                    Directors::getInformationByYear($date->format('Y'), $id)
                        ->first()->toArray();
            }
        }


        return view('Pages/indexAdvanced', [
            "actors" => $actors,
            'comments' => Comments::orderBy('id', 'desc')->get(),
            'directors' => $directors,
        ]);
    }

    /**
     * Page Mention
     */
    public function indexProfessional(){

        for($i = 1; $i <= 12; $i++){
            $categories[] = Movies::BestCategories()->ByDate($i, date('Y'))->take(5)->get();
        }

        dump($categories);
        exit();



        return view('Pages/indexProfessional');
    }


    /**
     * Page Contact
     */
    public function contact(){
        return view('Pages/contact');
    }

    /**
     * Page Mention
     */
    public function mention(){

        return view('Pages/mention');
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request){

        // recupere de maniere sécurisé la valeur de mon input dont le name
        // est title
        $title = $request->input('title');
        $lang = $request->input('lang');
        $bo = $request->input('bo');
        $visible = $request->input('visible');
        $cover = $request->input('cover');

        dump($cover);

        return view('Pages/search');
    }

    /**
     * Page FAQ
     */
    public function faq(){

        return view('Pages/faq');
    }



}













