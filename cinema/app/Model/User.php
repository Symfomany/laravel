<?php
namespace App\Model;

use App\Observer\UserObserver;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


/**
 * Class Actors représentant la table actors
 * @package App\Model
 */
class User extends Model implements AuthenticatableContract {

    use Authenticatable;

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = 'user';


    /**
     * Protected field
     * @var array
     */
    protected $guarded = array('id', 'password');



}

