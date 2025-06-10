<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesis', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('no_telepon', 20)->unique();
            $table->string('no_regis')->unique();
            $table->date('tgl_lahir');
            $table->boolean('status_kerja')->default(false);
            $table->string('asal_instansi');
            $table->foreignId('skemas_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesis');
    }
}
