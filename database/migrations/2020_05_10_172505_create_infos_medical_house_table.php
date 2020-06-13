<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosMedicalHouseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos_medical_house', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medical_house_id')->index()->nullable();
            $table->string('icon', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('infos', 255)->nullable();
            $table->timestamps();

            $table->foreign('medical_house_id')
                ->references('id')
                ->on('medical_houses')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos_medical_house');
    }
}
