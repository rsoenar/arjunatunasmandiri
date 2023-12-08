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
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment('Kode Pelanggan');
            $table->string('nama', 50)->comment('Nama Pelanggan');
            $table->string('alamat', 100)->comment('Alamat Pelanggan');
            $table->string('kode_pos', 10)->comment('Kode Pos');
            $table->string('no_identitas', 20)->comment('Nomor Identitas');
            $table->string('telepon', 50)->comment('Nomor Telepon');
            $table->string('email', 50)->unique()->comment('Email');
            $table->string('photo_url', 100)->comment('Photo URL');
            $table->char('status')->comment('1 : Aktif, 2 : Blocked')->default(1);
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
        Schema::dropIfExists('customers');
    }
};
