<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanSurveyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_survey', function (Blueprint $table) {
            $table->id();
            $table->integer('soal_id');
            $table->integer('survey_id');
            $table->integer('kategori_soal_id');
            $table->integer('jawaban_soal_id')->nullable()->default(null);
            $table->text('jawaban_lainnya')->nullable()->default(null);
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
        Schema::dropIfExists('jawaban_survey');
    }
}
