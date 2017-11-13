<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('referrer')->nullable();
            $table->string('domain')->nullable();
            $table->json('data')->nullable();
            $table->timestamps();
            $table->integer('link_id')->unsigned();
            $table->foreign('link_id')->references('id')->on('links');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('link_events');
    }
}
