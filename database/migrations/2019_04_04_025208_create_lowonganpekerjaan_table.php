<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLowonganpekerjaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowonganpekerjaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pekerjaan');
            $table->string('deskripsi_pekerjaan');
            $table->text('syarat_pekerjaan');
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
        Schema::dropIfExists('lowonganpekerjaan');
    }
}
