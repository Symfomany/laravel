<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Comments extends Model{

    protected $table = 'comments';

    public $timestamps = false;


    public function movies()
    {
        return $this->belongsTo('App\Model\Movies');
    }

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }


//    public function user()
//    {
//        return $this->belongsTo('App\Model\User');
//    }


}

