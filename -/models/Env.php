<?php namespace ewma\apps\models;

class Env extends \Model
{
    public $table = 'ewma_apps_envs';

    public function server()
    {
        return $this->belongsTo(Server::class);
    }

    public function hosts()
    {
        return $this->hasMany(Host::class);
    }
}

class EnvObserver
{
    public function creating($model)
    {
        $position = Env::max('position') + 10;

        $model->position = $position;
    }
}

Env::observe(new EnvObserver);
