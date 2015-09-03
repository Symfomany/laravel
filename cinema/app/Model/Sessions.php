<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actors représentant la table actors
 * @package App\Model
 */
class Sessions extends Model{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = 'sessions';





    public function movies()
    {
        return $this->belongsToOne('App\Model\Movies');
    }

}

