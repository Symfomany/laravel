<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

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





    public function movies()
    {
        return $this->belongsToMany('App\Model\Movies');
    }

}

