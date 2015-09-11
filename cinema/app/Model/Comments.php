<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Comments extends Model{

    protected $table = 'comments';

    public $timestamps = false;

    protected $fillable = ['content', 'movies_id', 'date_created', 'user_id'];


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

