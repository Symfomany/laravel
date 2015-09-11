<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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



    public function movies()
    {
        return $this->belongsToMany('App\Model\Movies');
    }

}

