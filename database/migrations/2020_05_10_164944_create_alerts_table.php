<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('page_id')->index()->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('icon')->nullable();
            $table->integer('types')->nullable()->comment('1 = alert, 2 = alert-message, 3 = plain-text, ...');
            $table->integer('levels')->nullable()->comment('1 = default, 2 = info, 3 = warning, 4 = danger');
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages')
                ->onDelete('cascade');
        });

        Schema::create('pages_alerts', function (Blueprint $table) {
            $table->primary(['page_id','alert_id']);
            $table->unsignedInteger('page_id')->index();
            $table->unsignedInteger('alert_id')->index();

            $table->foreign('page_id')
                ->references('id')
                ->on('pages');

            $table->foreign('alert_id')
                ->references('id')
                ->on('alerts');

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
        Schema::table('pages_alerts', function (Blueprint $table) {
            $table->dropForeign('pages_alerts_page_id_foreign');
            $table->dropForeign('pages_alerts_alert_id_foreign');
        });

        Schema::dropIfExists('alerts');
    }
}
