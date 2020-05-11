<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('doctor_id')->index()->nullable();
            $table->string('objet_demande', 255);
            $table->string('civility');
            $table->string('name');
            $table->string('firstname');
            $table->string('address');
            $table->string('postal_code');
            $table->string('email');
            $table->string('phone');
            $table->date('date_consultation');
            $table->string('name_doctor');
            $table->string('firstname_doctor');
            $table->string('objet_demande_doctor');
            $table->longText('precisions');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
