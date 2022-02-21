<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responden', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_survey_id');
            $table->bigInteger('kartu_keluarga')->unique();
            $table->text('alamat');
            $table->bigInteger('provinsi');
            $table->bigInteger('kabupaten_kota');
            $table->bigInteger('kecamatan');
            $table->bigInteger('desa_kelurahan');
            $table->string('nomor_hp')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('responden');
    }
}
