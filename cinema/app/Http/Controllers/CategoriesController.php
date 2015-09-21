<?php

namespace App\Http\Controllers;
use App\Model\Categories;
use App\Model\Movies;
use App\Model\Notifications;
use App\Model\Tags;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


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



//        $not = new Notifications();
//        $not->title = "Catégorie 6 vide";
//        $not->tags = Tags::all()->toArray();
//        $not->save();

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













