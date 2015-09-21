<?php
namespace App\Model;

use Jenssegers\Mongodb\Model as Eloquent;

/**
 * Class Notifications représentant les notifications
 * @package App\Model
 */
class Notifications extends Eloquent{

    /**
     * Connections
     * @var string
     */
    protected $connection = 'mongodb';

    /**
     * Nom de ma collection
     * @var string
     */
    protected $collection = 'notifications';


    public function movies()
    {
        return $this->hasOne('App\Model\Movies');
    }

}

