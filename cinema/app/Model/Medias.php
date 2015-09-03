<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Actors représentant la table actors
 * @package App\Model
 */
class Medias extends Model{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = 'medias';





    public function movies()
    {
        return $this->belongsToOne('App\Model\Medias');
    }

}

