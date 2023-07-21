<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('start_station', 50);
            $table->string('end_station', 50);
            $table->dateTime('departure_time');
            $table->dateTime('arrival');
            $table->string('train_code', 20);
            $table->tinyInteger('train_section')->unsigned();
            $table->string('on_time', 20);
            $table->string('deleted', 20);
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
        Schema::dropIfExists('trains');
    }
};
