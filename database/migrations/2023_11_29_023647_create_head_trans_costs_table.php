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
        Schema::create('head_trans_costs', function (Blueprint $table) {
            $table->string('id', 6)->primary()->nullable(false)->comment('Kode biaya transaksi');
            $table->dateTime('tanggal')->comment('Tanggal transaksi')->nullable(false)->default(now());
            $table->foreignId('id_cost')->nullable()->constrained('cost_types')->onUpdate('CASCADE')->onDelete('CASCADE')->comment('Jenis biaya foregn id dari table cost_types');
            $table->longText('keterangan')->comment('Keterangan transaksi')->nullable(false);
            $table->bigInteger('total_biaya')->comment('Total biaya transaksi')->nullable(false)->default(0);
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
        Schema::dropIfExists('head_trans_costs');
    }
};
