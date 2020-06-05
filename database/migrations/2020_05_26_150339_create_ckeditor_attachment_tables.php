<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCKEditorAttachmentTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ckeditor_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('attachment')->nullable();
            $table->string('disk');
            $table->string('url');
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
        Schema::drop('ckeditor_attachments');
    }
}
