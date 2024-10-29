<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesanTable extends Migration
{
    public function up()
    {
        Schema::create('pesan', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Name
            $table->string('email')->unique(); // Email (must be unique)
            $table->string('alamat'); // Address
            $table->text('pesan'); // Message
            $table->timestamps(); // Created and updated timestamps
        });
    }

    public function down()
    {
        Schema::dropIfExists('pesan');
    }
}
