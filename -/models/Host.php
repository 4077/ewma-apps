<?php namespace ewma\apps\models;

class Host extends \Model
{
    public $table = 'ewma_apps_hosts';

    public function env()
    {
        return $this->belongsTo(Env::class);
    }
}

class HostObserver
{
    public function creating($model)
    {
        $position = Host::max('position') + 10;

        $model->position = $position;
    }
}

Host::observe(new HostObserver);
