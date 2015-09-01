<?php

namespace App\Http\Controllers;
use App\Model\Categories;
use App\Model\Movies;


/**
 * Class CategoriesController
 * @package App\Http\Controllers
 */
class CategoriesController extends Controller{


    public function getIndex(){

        return view('Categories/index');
    }

    public function getCreate(){

        return view('Categories/create');
    }

    /**
     * @param int $id
     */
    public function getUpdate($id){

        return view('Categories/update');
    }

    /**
     * @param $id
     */
    public function getDelete($id){

        return redirect('categories/index');
    }
}













