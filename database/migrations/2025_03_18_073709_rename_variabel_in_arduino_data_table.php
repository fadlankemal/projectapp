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
        Schema::table('arduino_data', function (Blueprint $table) {
            $table->renameColumn('variabel', 'rak');
            $table->renameColumn('nilai', 'nomor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('arduino_data', function (Blueprint $table) {
            $table->renameColumn('rak', 'variabel');
            $table->renameColumn('nomor', 'nilai');
        });
    }
};
