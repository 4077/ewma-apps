<?php namespace ewma\apps\models;

class Server extends \Model
{
    public $table = 'ewma_apps_servers';


}

class ServerObserver
{
    public function creating($model)
    {
        $position = Server::max('position') + 10;

        $model->position = $position;
    }
}

Server::observe(new ServerObserver);
