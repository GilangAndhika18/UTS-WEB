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
        Schema::create('nilai', function (Blueprint $table) {
            $table->unsignedBigInteger('mahasiswa_id');
            $table->unsignedBigInteger('mata_kuliah_id');
            $table->integer('nilai');
        
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('mata_kuliah_id')->references('id')->on('mata_kuliah')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
