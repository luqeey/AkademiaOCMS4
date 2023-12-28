<?php namespace App\Task\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTasksTable extends Migration
{
    public function up()
    {
        Schema::create('app_task_tasks', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('task_id');
            $table->dateTime('planned_start');
            $table->dateTime('planned_end');
            $table->integer('planned_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_task_tasks');
    }
}
