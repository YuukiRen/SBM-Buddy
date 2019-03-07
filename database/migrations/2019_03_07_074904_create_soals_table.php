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
            $table->text('pertanyaan');
            $table->integer('jawaban');
            $table->string('mapel');
            $table->text('pilihana');
            $table->text('pilihanb');
            $table->text('pilihanc');
            $table->text('pilihand');
            $table->text('pilihane');
            $table->text('pembahasan');
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
        Schema::dropIfExists('soals');
    }
}
