<?php namespace App\Project\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('app_project_projects', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('project_id');
            $table->string('customer');
            $table->boolean('is_done')->default(false);
            $table->string('projectManager');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_project_projects');
    }
}
