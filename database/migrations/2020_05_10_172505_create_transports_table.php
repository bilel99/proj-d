<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icon', 255)->nullable();
            $table->string('title', 255)->nullable();
            $table->string('infos', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('medical_houses_transports', function (Blueprint $table) {
            $table->primary(['medical_house_id','transport_id']);
            $table->unsignedInteger('medical_house_id')->index();
            $table->unsignedInteger('transport_id')->index();

            $table->foreign('medical_house_id')
                ->references('id')
                ->on('medical_houses');

            $table->foreign('transport_id')
                ->references('id')
                ->on('transports');

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
        Schema::table('medical_houses_transports', function (Blueprint $table) {
            $table->dropForeign('medical_houses_transports_medical_house_id_foreign');
            $table->dropForeign('medical_houses_transports_transport_id_foreign');
        });


        Schema::dropIfExists('transports');
    }
}
