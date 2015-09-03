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





    public function movies()
    {
        return $this->belongsToMany('App\Model\Movies');
    }

}

