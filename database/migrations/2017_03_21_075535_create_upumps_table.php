<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpumpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upumps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('imagepath');
            $table->integer('pump_id');
            $table->integer('user_id');
            $table->integer('client_id');
            $table->string('description');
            $table->integer('year');
            $table->string('pumpAddress');
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
        Schema::dropIfExists('upumps');
    }
}
