<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->string('location');
            $table->longText('contact');
            $table->longText('specialties');
            $table->longText('skills');
            $table->longText('about');

            $table->string('locale')->index();
            $table->integer('resume_id')->unsigned();
            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');

            $table->unique(['resume_id','locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resume_translations');
    }
}
