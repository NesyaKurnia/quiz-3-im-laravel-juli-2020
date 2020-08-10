<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyek', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_proyek');
            $table->longText('deskripsi_proyek');
            $status->boolean('status');
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();

            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('manager_id')->references('id')->on('manager');
            $table->timestamps();
        });

        // $table->bigIncrements('id');
        //     $table->unsignedBigInteger('pertanyaan_id')->nullable();
        //     $table->unsignedBigInteger('profile_id')->nullable();

        //     $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        //     $table->foreign('profile_id')->references('id')->on('profiles');
        //     $table->integer('poin');    https://github.com/NesyaKurnia/quiz-3-im-laravel-juli-2020
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyek');
    }
}
