<?php

namespace App\Http\Controllers;


use App\Model\Comments;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller{


//    public function __construct()
//    {
//        $this->middleware('auth', ['except' => 'contact']);
//    }


    /**
     * Page Mention
     */
    public function index(){

        Auth::login(User::find(1));

        return view('Pages/index', [
            'comments' => Comments::orderBy('id', 'desc')->get()
        ]);
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













