<?php

namespace App\Listeners;


class ActorsListeners
{

    /**
     * Dans les deux cas, les événements saving / saved sont lancés.
     * Si false est retourné par la méthode creating, updating, ou saving, alors l'action est annulée :
     * @param $model
     */
    public function saving($model)
    {
    }

    public function saved($model)
    {
        //
    }

}