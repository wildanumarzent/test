<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKonsumen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_konsumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_konsumen');
            $table->string('jenis_kendaraan');
            $table->string('no_polisi');
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_hp');

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
        Schema::dropIfExists('table_konsumen');
    }
}
