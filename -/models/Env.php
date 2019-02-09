<?php namespace ewma\apps\models;

class Env extends \Model
{
    public $table = 'ewma_apps_envs';

    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
