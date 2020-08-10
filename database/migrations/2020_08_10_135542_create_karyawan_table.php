<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_karyawan');
            $table->string('jabatan');
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();

            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('manager_id')->references('id')->on('manager');
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
        Schema::dropIfExists('karyawan');
    }
}
