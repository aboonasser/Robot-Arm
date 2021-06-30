<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControllsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlls', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Engine_1');
            $table->integer('Engine_2');
            $table->integer('Engine_3');
            $table->integer('Engine_4');
            $table->integer('Engine_5');
            $table->integer('Engine_6');
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
        Schema::dropIfExists('controlls');
    }
}
