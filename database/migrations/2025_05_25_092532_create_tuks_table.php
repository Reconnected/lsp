<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuksTable extends Migration
{
    // Tuk adalah Tempat Uji Kompetensi

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');
            $table->text('alamat');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('tuks');
    }
}
