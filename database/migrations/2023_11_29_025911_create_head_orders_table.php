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
        Schema::create('head_orders', function (Blueprint $table) {
            $table->string('id', 6)->primary()->unique()->nullable(false)->comment('Kode order');
            $table->dateTime('tanggal')->comment('Tanggal transaksi order')->nullable(false)->default(now());
            $table->foreignId('id_customer')->constrained('customers')->onUpdate('CASCADE')->onDelete('CASCADE')->comment('Jenis order foregn id dari table customers')->nullable()->default(001);
            $table->longText('keterangan')->comment('Keterangan')->nullable(false);
            $table->bigInteger('total_biaya')->comment('Total biaya order')->nullable(false)->default(0);
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
        Schema::dropIfExists('head_orders');
    }
};
