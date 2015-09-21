<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Actors représentant la table actors
 * @package App\Model
 */
class Directors extends Model{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = 'directors';


    /**
     * Get Ids of Best Directors
     * @param $query
     * @return mixed
     */
    public function scopeGetIdsBestDirectors($query){

           return $query->select('d.id')
            ->from('directors as d')
            ->join('directors_movies AS dm','d.id', '=', 'dm.directors_id')
            ->groupBy('d.id')
            ->orderBy(DB::raw("COUNT( dm.movies_id )"), 'desc')
            ->take(5);
    }

    /**
     * Get all information about best directors
     * @param $query
     * @param $annee
     * @return mixed
     */
    public function scopeGetInformationByYear($query, $annee, $id){
        return $query
            ->select(DB::raw("COUNT( dm.movies_id ) AS nb,
                        CONCAT( d.firstname,  ' ', d.lastname ) AS fullname"))
            ->from('directors as d')
            ->join('directors_movies AS dm','d.id', '=', 'dm.directors_id')
            ->join('movies AS m','m.id', '=', 'dm.movies_id')
            ->where('d.id', $id)
            ->where(DB::raw('YEAR(m.date_release)'), '=', $annee);

    }

    public function movies()
    {
        return $this->belongsToMany('App\Model\Movies');
    }

}

