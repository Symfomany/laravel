<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;


/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController extends Controller{

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













