<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {

            $table->id();
            $table->string('branche');
            $table->integer('unbearbeitet');
            $table->integer('Gf_helt');
            $table->integer('Nicht_erreit');
            $table->integer('Wiedervolage');
            $table->integer('Kein_interesse');
            $table->integer('Zu_viele_Versuche');
            $table->integer('Termine');
            $table->integer('Kunden');
            $table->integer('Black_List');
            $table->integer('Insgesamt');

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
        Schema::dropIfExists('businesses');
    }
}
