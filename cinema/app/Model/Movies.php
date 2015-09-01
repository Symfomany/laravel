<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Movies extends Model{

    protected $table = 'movies';

    public $timestamps = false;

    protected $guarded = array('id', 'title');


    /**
     * Get ALl Movies Cover and visible
     * @param $query
     * @return mixed
     */
    public function scopePopular($query)
    {
        return $query
            ->where('visible', '=', 1)
            ->where('cover', '=', 1);
    }

    /**
     * Query in raw
     * @return mixed
     */
    public function scopeRawQuery(){

        return  DB::select( DB::raw("
          SELECT *
          FROM movies
          WHERE visible = :visible"), array(
                'visible' => 1
        ));
    }

    public function categories()
    {
        return $this->belongsTo('App\Model\Categories');
    }

    public function comments()
    {
        return $this->hasMany('App\Model\Comments');
    }

}

