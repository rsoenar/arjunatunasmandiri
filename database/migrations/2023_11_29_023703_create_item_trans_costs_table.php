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
        Schema::create('item_trans_costs', function (Blueprint $table) {
            $table->string('id_transaksi', 6)->nullable(false)->comment('FK id dari head_trans_costs');
            $table->string('nomor-bukti', 20)->comment('Nomor bukti operasional')->nullable(false);
            $table->dateTime('tanggal')->comment('Tanggal Transaksi operasional')->nullable(false)->default(now());
            $table->bigInteger('biaya')->comment('Nilai biaya operasional')->nullable(false)->default(0);
            $table->longText('keterangan')->comment('Keterangan operasional')->nullable(false);
            $table->timestamps();
        });

        Schema::table('item_trans_costs', function (Blueprint $table) {
            $table->foreign('id_transaksi')
                ->references('id')
                ->on('head_trans_costs')
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
        Schema::dropIfExists('item_trans_costs');
    }
};
