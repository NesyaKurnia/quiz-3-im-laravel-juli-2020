<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_karyawan');
            $table->unsignedBigInteger('proyek_id')->nullable();
            $table->unsignedBigInteger('karyawan_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();

            $table->foreign('proyek_id')->references('id')->on('proyek');
            $table->foreign('karyawan_id')->references('id')->on('karyawan');
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
        Schema::dropIfExists('staff');
    }
}
