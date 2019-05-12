<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idPaket');
            $table->string('pertanyaan');
            $table->string('jawaban');
            $table->string('mapel');
            $table->string('pilihana');
            $table->string('pilihanb');
            $table->string('pilihanc');
            $table->string('pilihand');
            $table->string('pilihane');
            $table->string('pembahasan');
            $table->timestamps();
            $table->foreign('idPaket')->references('id')->on('pakets')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soals');
    }
}
