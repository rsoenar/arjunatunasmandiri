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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment('Kode Sopir');
            $table->string('nama', 50)->comment('Nama Sopir')->nullable(false);
            $table->string('alamat', 100)->comment('Alamat Sopir')->nullable(false);
            $table->string('kode_pos', 10)->comment('Kode Pos')->nullable(false);
            $table->string('no_identitas', 20)->comment('No Identitas (KTP,PASSPORT)')->nullable();
            $table->string('telepon', 15)->comment('Nomor Telepon')->nullable();
            $table->string('email', 50)->unique()->comment('Email')->nullable();
            $table->text('keterangan')->comment('Keterangan');
            $table->string('photo_url', 100)->comment('URL photo Sopir');
            $table->char('status')->comment('1 : Aktif, 2 : Non Aktif')->default(1);
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
        Schema::dropIfExists('drivers');
    }
};
