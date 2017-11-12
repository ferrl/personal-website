<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('content');

            $table->string('locale')->index();
            $table->integer('certificate_id')->unsigned();
            $table->foreign('certificate_id')->references('id')->on('certificates')->onDelete('cascade');

            $table->unique(['certificate_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_translations');
    }
}
