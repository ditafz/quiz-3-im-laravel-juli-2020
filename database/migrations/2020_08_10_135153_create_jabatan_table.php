<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unSignedBigInteger('id_karyawan');
            $table->unSignedBigInteger('id_jabatan1');
            $table->unSignedBigInteger('id_jabatan2');
            $table->timestamps();

            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawan');
             $table->foreign('id_jabatan1')->references('id_jabatan1')->on('staff');
             $table->foreign('id_jabatan2')->references('id_jabatan2')->on('manager');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jabatan');
    }
}
