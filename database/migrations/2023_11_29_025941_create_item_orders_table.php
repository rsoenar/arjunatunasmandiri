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
        Schema::create('item_orders', function (Blueprint $table) {
            $table->string('id-order', 6)->comment('FK Head Order');
            $table->unsignedBigInteger('id-kendaraan')->comment('FK kode cars')->nullable(false);
            $table->dateTime('tanggal-mulai')->comment('Tanggal mulai order')->nullable(false)->default(now());
            $table->dateTime('tanggal-akhir')->comment('Tanggal akhir order')->nullable(false)->default(now());
            $table->unsignedBigInteger('id-sopir')->comment('FK Sopir  dari table Drivers')->nullable()->default(1);
            $table->bigInteger('biaya')->comment('Nilai biaya operasional')->nullable(false)->default(0);
            $table->longText('keterangan')->comment('Keterangan operasional')->nullable(false);
            $table->timestamps();
        });

        Schema::table('item_orders', function (Blueprint $table) {
            $table->foreign('id-order')
                ->references('id')
                ->on('head_orders')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // $table->integer('id-order-types')->unsignedBigInteger();

            $table->foreign('id-kendaraan')
                ->references('id')
                ->on('cars')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // $table->integer('id-sopir')->unsignedBigInteger();

            $table->foreign('id-sopir')
                ->references('id')
                ->on('drivers')
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
        Schema::dropIfExists('item_orders');
    }
};
