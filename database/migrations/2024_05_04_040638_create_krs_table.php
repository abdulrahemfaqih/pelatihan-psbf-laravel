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
        Schema::create('krs', function (Blueprint $table) {
            $table->id('id_krs');
            $table->unsignedSmallInteger('tahun_ajaran_id');
            $table->string('mahasiswa_id', 12);

            $table->foreign('tahun_ajaran_id')->references('id_tahun_ajaran')->on('tahun_ajaran')->contrained();
            $table->foreign('mahasiswa_id')->references('nim')->on('mahasiswa')->contrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
