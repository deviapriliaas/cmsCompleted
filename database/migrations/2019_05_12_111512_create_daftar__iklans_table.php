<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaftarIklansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar__iklans', function (Blueprint $table) {
            $table->bigIncrements('id_iklan');
            $table->integer('profile_id');
            $table->string('gambar_iklan');
            $table->timestamp('published_at');
            $table->string('jenis_iklan');
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
        Schema::dropIfExists('daftar__iklans');
    }
}
