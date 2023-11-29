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
        Schema::create('trans_cost_taxes', function (Blueprint $table) {
            $table->id()->index()->autoIncrement()->nullable(false)->comment('Kode Biaya Pajak');
            $table->foreignId('id_kendaraan')->nullable()->constrained('cars')->onUpdate('SET NULL')->onDelete('CASCADE')->comment('Kode Kendaraan');
            $table->dateTime('tanggal-transaksi')->comment('Tanggal transaksi pajak')->default(now())->nullable(false);
            $table->string('bukti-dokumen', 25)->comment('Bukti dokumen perpanjangan')->nullable(false);
            $table->dateTime('expire')->comment('Tangga Kadaluarsa')->nullable(false)->default(now());
            $table->string('vendor', 25)->comment('Nama instansi pembiayaan')->nullable(false);
            $table->string('nama-personil', 25)->comment('Nama pegawai yang melakukan perpanjangan Pajak STNK')->nullable(false);
            $table->longText('keterangan')->comment('Keterangan')->nullable(false);
            $table->string('doc-url', 100)->comment('URL photo bukti perpanjangan')->nullable();
            $table->bigInteger('biaya')->comment('Biaya Transaksi perpanjangan Pajak STNK')->nullable(false)->default(0);
            $table->char('status', 1)->comment('1 : Open,2 : Closed')->nullable(false)->default(1);
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
        Schema::dropIfExists('trans_cost_taxes');
    }
};
