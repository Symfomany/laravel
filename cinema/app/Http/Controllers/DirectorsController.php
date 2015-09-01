<?php

namespace App\Http\Controllers;


/**
 * Class DirectorsController
 * @package App\Http\Controllers
 */
class DirectorsController extends Controller{

    /**
     * Page Index
     */
    public function index(){

        return view('Directors/index');
    }

    /**
     * Page Contact
     */
    public function create(){

        return view('Directors/create');
    }

    /**
     * Page Mention
     */
    public function update(){

        return view('Directors/update');
    }

    /**
     * Page FAQ
     */
    public function read(){

        return view('Directors/read');
    }

    /**
     * Page FAQ
     */
    public function delete(){

        return redirect('/directors/index');
    }



}













