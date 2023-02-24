<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit_deskripsis', function (Blueprint $table) {
            $table->id();
            $table->string('penyakit_id');
            $table->text('deskripsi');
            $table->text('penyebab');
            $table->text('pengobatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyakit_deskripsis');
    }
};
