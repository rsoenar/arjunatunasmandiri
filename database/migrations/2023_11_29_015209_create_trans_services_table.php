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
            $table->unsignedBigInteger('id_kendaraan')->nullable(false)->comment('Kode Kendaraan');
            $table->dateTime('tanggal_service')->comment('Tanggal Service')->nullable(false);
            $table->string('bukti_doc', 25)->comment('Bukti Dokumen Service')->nullable(false);
            $table->dateTime('tanggal_expire')->comment('Tanggal Expire')->nullable(false);
            $table->string('nama_vendor', 25)->comment('Nama Bengkel')->nullable(false);
            $table->string('nama_personil', 50)->comment('Nama Pegawai atau Sopir yang membawa ke tempat Service')->nullable(false);
            $table->longText('keterangan')->comment('Keterangan isi dari Service')->nullable(false);
            $table->string('doc_url', 100)->comment('Photo Bukti Service URL')->nullable(false);
            $table->char('status')->comment('1: Open, 2: Closed')->nullable(false)->default(1);
            $table->timestamps();
        });

        Schema::table('trans_services', function (Blueprint $table) {
            $table->foreign('id_kendaraan')
                ->references('id')
                ->on('cars')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
