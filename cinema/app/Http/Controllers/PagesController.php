<?php

namespace App\Http\Controllers;


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
     * Page FAQ
     */
    public function faq(){

        return view('Pages/faq');
    }



}













