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
        Schema::create('pemesanantrav', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('notelp');
            $table->string('tujuan');
            $table->string('jemput');
            $table->string('penumpang');
            $table->date('berangkat');
            $table->date('pulang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanantrav');
    }
};
