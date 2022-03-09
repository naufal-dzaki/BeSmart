<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('tgl_lahir');
            $table->integer('nisn');
            $table->string('no_hp');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
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
        Schema::dropIfExists('biodatas');
    }
}
