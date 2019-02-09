<?php namespace ewma\apps\schemas;

class Host extends \Schema
{
    public $table = 'ewma_apps_hosts';

    public function blueprint()
    {
        return function (\Illuminate\Database\Schema\Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('position')->default(0);
            $table->integer('env_id')->default(0);
            $table->string('host')->default('');
            $table->text('aliases');
            $table->boolean('ssl')->default(false);
        };
    }
}
