<?php namespace ewma\apps\schemas;

class Server extends \Schema
{
    public $table = 'ewma_apps_servers';

    public function blueprint()
    {
        return function (\Illuminate\Database\Schema\Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('position')->default(0);
            $table->string('host', 15)->default('');
            $table->string('user')->default('');
        };
    }
}
