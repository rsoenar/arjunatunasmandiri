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
            $table->bigInteger('id')->autoIncrement()->nullable(false)->comment('Kode order');
            $table->dateTime('tanggal')->comment('Tanggal transaksi order')->nullable(false)->default(now());
            $table->unsignedBigInteger('id_customer')->constrained('customers')->comment('foregn id dari table customers')->nullable()->default(1);
            $table->longText('keterangan')->comment('Keterangan')->nullable(false);
            $table->bigInteger('total_biaya')->comment('Total biaya order')->nullable(false)->default(0);
            $table->timestamps();
        });
        Schema::table('head_orders', function (Blueprint $table) {
            $table->foreign('id_customer')
                ->references('id')
                ->on('customers')
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
        Schema::dropIfExists('head_orders');
    }
};
