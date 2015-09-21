<?php
namespace App\Model;

use App\Listeners\ActorsListeners;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Actors représentant la table actors
 * @package App\Model
 */
class Actors extends Model{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = 'actors';

    /**
     * Champs updated_at et created_at
     * sont pris en compte par Laravel
     * @var bool
     */
    public $timestamps = false;


    /**
     * Champs remplissables en base de données
     * @var array
     */
    protected $fillable = ['firstname', 'lastname'];


    /**
     * Nb of actors per city
     * @param $query
     */
    public function scopeNbPerCity($query,
                                   $tri = "nb",
                                   $sens = "desc",
                                   $limit = 5){

        return $query->select(DB::raw('COUNT(id) as nb'), "city")
            ->groupBy("city")
            ->orderBY($tri, $sens)
            ->take($limit);
    }


















    public static function boot()
    {
        parent::boot();

        Actors::observe(new ActorsListeners());

        // Setup event bindings...
    }


    public function movies()
    {
        return $this->belongsToMany('App\Model\Movies');
    }

}

