<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMateri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_materi');
            $table->string('nama');
            $table->string('video');
            $table->string('foto');
            $table->integer('id_kelas')->unique()->unsigned();

            $table->foreign('id_kelas')
                ->references('id_kelas')
                ->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materi');
    }
}
