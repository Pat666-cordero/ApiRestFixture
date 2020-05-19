<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOlympiadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('olympiads', function (Blueprint $table) {
            $table->id();
            $table->string('olympiad_name', 200);
            $table->string('olympiad_description', 250);
            $table->date_time_set('startdate');
            $table->date_time_set('end_date');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('olympiads');
    }
}
