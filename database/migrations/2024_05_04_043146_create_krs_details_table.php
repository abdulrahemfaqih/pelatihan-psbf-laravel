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
        Schema::create('krs_detail', function (Blueprint $table) {
            $table->id('id_krs_detail');
            $table->unsignedBigInteger('krs_id');
            $table->unsignedBigInteger('kelas_id');
            $table->string('nilai_id', 2);

            $table->foreign('kelas_id')->references('id_kelas')->on('kelas')->constrained();
            $table->foreign('krs_id')->references('id_krs')->on('krs')->constrained();
            $table->foreign('nilai_id')->references('id_nilai')->on('ref_nilai')->constrained();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs_detail');
    }
};
