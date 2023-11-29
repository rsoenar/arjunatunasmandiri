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
        Schema::create('trans_services', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment('Kode Biaya Service')->nullable(false);
            $table->foreignId('id_kendaraan')->nullable()->constrained('cars')->onUpdate('SET NULL')->onDelete('CASCADE')->comment('Kode Kendaraan');
            $table->dateTime('tanggal-service')->comment('Tanggal Service')->nullable(false);
            $table->string('bukti-doc', 25)->comment('Bukti Dokumen Service')->nullable(false);
            $table->dateTime('tanggal-expire')->comment('Tanggal Expire')->nullable(false);
            $table->string('nama-vendor', 25)->comment('Nama Bengkel')->nullable(false);
            $table->string('nama-personil', 50)->comment('Nama Pegawai atau Sopir yang membawa ke tempat Service')->nullable(false);
            $table->longText('keterangan')->comment('Keterangan isi dari Service')->nullable(false);
            $table->string('doc-url', 100)->comment('Photo Bukti Service URL')->nullable(false);
            $table->char('status')->comment('1: Open, 2: Closed')->nullable(false);
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
        Schema::dropIfExists('trans_services');
    }
};
