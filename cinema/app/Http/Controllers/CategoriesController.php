<?php

namespace App\Http\Controllers;
use App\Model\Categories;
use App\Model\Movies;


/**
 * Class CategoriesController
 * @package App\Http\Controllers
 */
class CategoriesController extends Controller{

    /**
     * Page Index
     */
    public function index(){
        $categories = Categories::all();

        return view('Categories/index',
            ['categories' => $categories]
        );
    }

    /**
     * Page Contact
     */
    public function create(){

        return view('Categories/create');
    }

    /**
     * Page Mention
     */
    public function update(){

        return view('Categories/update');
    }

    /**
     * Page FAQ
     */
    public function read(){

        return view('Categories/read');
    }

    /**
     * Page FAQ
     */
    public function delete(){

        return redirect('/directors/index');
    }


}













