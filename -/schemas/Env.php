<?php namespace ewma\apps\schemas;

class Env extends \Schema
{
    public $table = 'ewma_apps_envs';

    public function blueprint()
    {
        return function (\Illuminate\Database\Schema\Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('position')->default(0);
            $table->integer('app_id')->default(0);
            $table->integer('server_id')->default(0);
            $table->string('name')->default('');
            $table->string('short_name')->default('');
            $table->string('desc_name')->default('');
            $table->string('suffix')->default('');
            $table->string('git_branch')->default('');
        };
    }
}
