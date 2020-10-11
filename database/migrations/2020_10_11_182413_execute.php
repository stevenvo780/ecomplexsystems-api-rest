<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Execute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executes', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('process');
            $table->string('robot');
            $table->string('machine');
            $table->string('job');
            $table->string('status');
            $table->date('date_ini');
            $table->date('date_end');
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
        Schema::dropIfExists('executes');
    }
}
