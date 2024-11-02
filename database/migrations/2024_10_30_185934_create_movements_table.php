<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->increments('id_proses');
            $table->smallInteger('jumlah');
            $table->char('status');
            $table->foreignId('barang_id')->references('id')->on('goods')->onDelete('cascade');
            $table->foreignId('operator_id')->references('id')->on('operators')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
