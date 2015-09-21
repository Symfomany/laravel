<?php

namespace App\Http\Controllers;
use App\Http\Requests\ActorsRequest;
use App\Model\Actors;
use App\Model\Directors;
use App\Model\Movies;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;


/**
 * get API
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends Controller{

    public function getBestDirectors(){

        $directors = [];

        $begin = new \DateTime( '-5 year' );
        $end = new \DateTime( '+1year' );

        $interval = new \DateInterval('P1Y');
        $daterange = new \DatePeriod($begin, $interval ,$end);


        foreach($daterange as $date) {
            $obj = new \stdClass();
            $obj->period = $date->format('Y');
            $obj->tarantino = 2 + rand(1,5);
            $obj->wiliams = 3 + rand(1,5);
            $obj->weber = 5 + rand(1,5);
            $directors[] = $obj;
        }


        return response()->json(
            $directors
        );

    }



}













