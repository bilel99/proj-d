<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_houses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('page_id')->index()->nullable();
            $table->text('content')->nullable();
            $table->string('map', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('compl_address', 255)->nullable();
            $table->string('phone')->nullable();
            $table->string('hours')->nullable();
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')
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
        Schema::dropIfExists('medical_houses');
    }
}
