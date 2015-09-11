<?php

namespace App\Http\Controllers;
use App\Model\Categories;
use App\Model\Comments;
use App\Model\Movies;


/**
 * Class CommentsController
 * @package App\Http\Controllers
 */
class CommentsController extends Controller{

    /**
     * Page Index
     */
    public function index(){
        $comments = Comments::all();

        return view('Comments/index',
            ['comments' => $comments]
        );
    }

    /**
     * Page Index
     */
    public function ajax(){
        $comments = Comments::orderBy('id', 'desc')->get();

        return view('Comments/ajax',
            ['comments' => $comments]
        );
    }

}













