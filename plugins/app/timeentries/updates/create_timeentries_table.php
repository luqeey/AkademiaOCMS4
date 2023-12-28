<?php namespace App\TimeEntries\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTimeentriesTable extends Migration
{
    public function up()
    {
        Schema::create('app_timeentries_timeentries', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_timeentries_timeentries');
    }
}
