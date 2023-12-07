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
        Schema::create('cars', function (Blueprint $table) {
            $table->id()->autoIncrement()->comment('Kode Kendaraan');
            $table->string('nama', 50)->comment('Nama Kendaraan')->nullable(false);
            $table->string('merk', 20)->comment('Merk Kendaraan')->nullable(false);
            $table->string('transmisi', 20)->comment('Jenis Transmisi')->nullable(false);
            $table->string('warna', 20)->comment('Warna Kendaraan')->nullable(false);
            $table->string('no_pol', 10)->comment('Plat Nomor Kendaraan')->index('no-pol')->nullable(false);
            $table->string('no_rangka', 20)->comment('Nomor Rangka Kendaraan')->nullable(false);
            $table->string('no_mesin', 20)->comment('Nomor Mesin Kendaraan')->nullable(false);
            $table->string('bahan_bakar', 20)->comment('Bahan Bakar Kendaraan')->nullable(false);
            $table->string('tahun_produksi', 4)->comment('Tahun Produksi Kendaraan')->nullable(false);
            $table->dateTime('tanggal_pajak')->comment('Tanggal Akhir Pajak')->default(now());
            $table->dateTime('tanggal_stnk')->comment('Tanggal Akhir Stnk')->default(now());
            $table->string('pemilik', 50)->comment('Nama Pemilik Kendaraan')->nullable();
            $table->text('keterangan')->comment('Keterangan')->nullable();
            $table->text('photo')->comment('filename *.ext')->nullable();
            $table->char('status', 1)->comment('1 : Tersedia, 2 : Terorder, 3 : Proses Booking, 4 : Serviece')->default(1);
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
        Schema::dropIfExists('cars');
    }
};
